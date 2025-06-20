<?php
require_once '../../connection/connection.php';

// Start session for error/success messages
session_start();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Initialize variables
    $title = '';
    $price = '';
    $product_code = '';
    $size = '';
    $total_products = '';
    $description = '';
    $uploaded_images = [];
    $errors = [];
    
    // Validate and sanitize form data
    if (isset($_POST['title']) && !empty(trim($_POST['title']))) {
        $title = htmlspecialchars(trim($_POST['title']));
    } else {
        $errors[] = "Product title is required.";
    }
    
    if (isset($_POST['price']) && !empty(trim($_POST['price']))) {
        $price = filter_var($_POST['price'], FILTER_VALIDATE_FLOAT);
        if ($price === false || $price <= 0) {
            $errors[] = "Please enter a valid price.";
        }
    } else {
        $errors[] = "Product price is required.";
    }
    
    if (isset($_POST['product_code']) && !empty(trim($_POST['product_code']))) {
        $product_code = htmlspecialchars(trim($_POST['product_code']));
        
        // Check if product code already exists
        try {
            $check_stmt = $pdo->prepare("SELECT product_id FROM products WHERE product_code = ?");
            $check_stmt->execute([$product_code]);
            if ($check_stmt->rowCount() > 0) {
                $errors[] = "Product code already exists. Please use a different code.";
            }
        } catch (PDOException $e) {
            $errors[] = "Database error while checking product code.";
        }
    } else {
        $errors[] = "Product code is required.";
    }
    
    if (isset($_POST['size']) && !empty($_POST['size'])) {
        $size = htmlspecialchars($_POST['size']);
    } else {
        $errors[] = "Product size is required.";
    }
    
    if (isset($_POST['total_products']) && !empty($_POST['total_products'])) {
        $total_products = filter_var($_POST['total_products'], FILTER_VALIDATE_INT);
        if ($total_products === false || $total_products <= 0) {
            $errors[] = "Please enter a valid quantity.";
        }
    } else {
        $errors[] = "Total products quantity is required.";
    }
    
    if (isset($_POST['description'])) {
        $description = htmlspecialchars(trim($_POST['description']));
    }
    
    // Handle file uploads  
    $upload_dir = '../../assets/images/products/';
    
    // Create upload directory if it doesn't exist
    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }
    
    // Process uploaded files
    if (isset($_FILES['product_images'])) {
        $file_count = count($_FILES['product_images']['name']);
        
        for ($i = 0; $i < $file_count; $i++) {
            if ($_FILES['product_images']['error'][$i] == UPLOAD_ERR_OK) {
                $file_name = $_FILES['product_images']['name'][$i];
                $file_tmp = $_FILES['product_images']['tmp_name'][$i];
                $file_size = $_FILES['product_images']['size'][$i];
                $file_type = $_FILES['product_images']['type'][$i];
                
                // Get file extension
                $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
                
                // Allowed file extensions
                $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
                
                // Validate file
                if (in_array($file_ext, $allowed_extensions)) {
                    if ($file_size <= 5000000) { // 5MB limit
                        // Generate unique filename
                        $new_filename = uniqid() . '_' . time() . '.' . $file_ext;
                        $upload_path = $upload_dir . $new_filename;
                        
                        if (move_uploaded_file($file_tmp, $upload_path)) {
                            $uploaded_images[] = $new_filename;
                        } else {
                            $errors[] = "Failed to upload image: " . $file_name;
                        }
                    } else {
                        $errors[] = "File size too large for: " . $file_name . " (Max 5MB)";
                    }
                } else {
                    $errors[] = "Invalid file type for: " . $file_name . " (Allowed: jpg, jpeg, png, gif, webp)";
                }
            }
        }
    }
    
    // If no errors, insert into database
    if (empty($errors)) {
        try {
            // Start transaction
            $pdo->beginTransaction();
            
            // Get main image (first uploaded image)
            $main_image = !empty($uploaded_images) ? $uploaded_images[0] : null;
            
            // Insert product data
            $stmt = $pdo->prepare("
                INSERT INTO products (
                    title, price, product_code, size, total_products, 
                    description, main_image_path, created_at, updated_at
                ) VALUES (?, ?, ?, ?, ?, ?, ?, NOW(), NOW())
            ");
            
            // Execute the statement
            $result = $stmt->execute([
                $title, $price, $product_code, $size, 
                $total_products, $description, $main_image
            ]);
            
            if ($result) {
                // Get the inserted product ID
                $product_id = $pdo->lastInsertId();
                
                // Insert product images
                if (!empty($uploaded_images)) {
                    $image_stmt = $pdo->prepare("
                        INSERT INTO product_images (product_id, image_path, sort_order) 
                        VALUES (?, ?, ?)
                    ");
                    
                    foreach ($uploaded_images as $index => $image_path) {
                        $image_stmt->execute([$product_id, $image_path, $index + 1]);
                    }
                }
                
                // Commit transaction
                $pdo->commit();
                
                $_SESSION['success_message'] = "Product added successfully with " . count($uploaded_images) . " image(s)!";
                header('Location: ../../add-product.php');
                exit();
            } else {
                $pdo->rollBack();
                $errors[] = "Failed to add product to database.";
            }
            
        } catch (PDOException $e) {
            // Rollback transaction on error
            $pdo->rollBack();
            $errors[] = "Database error: " . $e->getMessage();
        }
    }
    
    // If there are errors, store them in session and redirect back
    if (!empty($errors)) {
        $_SESSION['error_messages'] = $errors;
        $_SESSION['form_data'] = $_POST; // Preserve form data
        header('Location: ../../add-product.php');
        exit();
    }
}

// If not a POST request, redirect to add product page
header('Location: ../../add-product.php');
exit();
?> 