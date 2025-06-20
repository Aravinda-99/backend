<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/dashboard/favicon.png" type="image/x-icon">
    <title>Multikart - Premium Admin Template</title>

    <!-- Google font-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">


    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/icofont.css">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/prism.css">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/chartist.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row">
                <div class="main-header-left d-lg-none w-auto">
                    <div class="logo-wrapper">
                        <a href="index.html">
                            <img class="blur-up lazyloaded d-block d-lg-none"
                                src="assets/images/dashboard/multikart-logo-black.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="mobile-sidebar w-auto">
                    <div class="media-body text-end switch-sm">
                        <label class="switch">
                            <a href="javascript:void(0)">
                                <i id="sidebar-toggle" data-feather="align-left"></i>
                            </a>
                        </label>
                    </div>
                </div>
                <div class="nav-right col">
                    <ul class="nav-menus">
                        <li>
                            <form class="form-inline search-form">
                                <div class="form-group">
                                    <input class="form-control-plaintext" type="search" placeholder="Search..">
                                    <span class="d-sm-none mobile-search">
                                        <i data-feather="search"></i>
                                    </span>
                                </div>
                            </form>
                        </li>
                        <li>
                            <a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()">
                                <i data-feather="maximize-2"></i>
                            </a>
                        </li>
                        <li class="onhover-dropdown">
                            <a class="txt-dark" href="javascript:void(0)">
                                <h6>EN</h6>
                            </a>
                            <ul class="language-dropdown onhover-show-div p-20">
                                <li>
                                    <a href="javascript:void(0)" data-lng="en">
                                        <i class="flag-icon flag-icon-is"></i>English</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-lng="es">
                                        <i class="flag-icon flag-icon-um"></i>Spanish</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-lng="pt">
                                        <i class="flag-icon flag-icon-uy"></i>Portuguese</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-lng="fr">
                                        <i class="flag-icon flag-icon-nz"></i>French</a>
                                </li>
                            </ul>
                        </li>
                        <li class="onhover-dropdown">
                            <i data-feather="bell"></i>
                            <span class="badge badge-pill badge-primary pull-right notification-badge">3</span>
                            <span class="dot"></span>
                            <ul class="notification-dropdown onhover-show-div p-0">
                                <li>Notification <span class="badge badge-pill badge-primary pull-right">3</span></li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mt-0">
                                                <span>
                                                    <i class="shopping-color" data-feather="shopping-bag"></i>
                                                </span>Your order ready for Ship..!
                                            </h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mt-0 txt-success">
                                                <span>
                                                    <i class="download-color font-success" data-feather="download"></i>
                                                </span>Download Complete
                                            </h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mt-0 txt-danger">
                                                <span>
                                                    <i class="alert-color font-danger" data-feather="alert-circle"></i>
                                                </span>250 MB trash files
                                            </h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="txt-dark"><a href="javascript:void(0)">All</a> notification</li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="right_side_toggle" data-feather="message-square"></i>
                                <span class="dot"></span>
                            </a>
                        </li>
                        <li class="onhover-dropdown">
                            <div class="media align-items-center">
                                <img class="align-self-center pull-right img-50 blur-up lazyloaded"
                                    src="assets/images/dashboard/user3.jpg" alt="header-user">
                                <div class="dotted-animation">
                                    <span class="animate-circle"></span>
                                    <span class="main-circle"></span>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="user"></i>Edit Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="mail"></i>Inbox
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="lock"></i>Lock Screen
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="settings"></i>Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i data-feather="log-out"></i>Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-lg-none mobile-toggle pull-right">
                        <i data-feather="more-horizontal"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            <div class="page-sidebar">
                <div class="main-header-left d-none d-lg-block">
                    <div class="logo-wrapper">
                        <a href="index.php">
                            <img class="d-none d-lg-block blur-up lazyloaded"
                                src="assets/images/dashboard/multikart-logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="sidebar custom-scrollbar">
                    <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                            aria-hidden="true"></i></a>
                    <ul class="sidebar-menu">
                        <li>
                            <a class="sidebar-header" href="../admin/index.php">
                                <i data-feather="home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="box"></i>
                                <span>Products</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>

                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-circle"></i>
                                        <span>Physical</span>
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </a>

                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="../admin/category.php">
                                                <i class="fa fa-circle"></i>Category
                                            </a>
                                        </li>

                                        <li>
                                            <a href="../admin/category-sub.php">
                                                <i class="fa fa-circle"></i>Sub Category</a>
                                        </li>

                                        <li>
                                            <a href="../admin/product-list.php">
                                                <i class="fa fa-circle"></i>Product List</a>
                                        </li>

                                        <li>
                                            <a href="../admin/product-detail.php">
                                                <i class="fa fa-circle"></i>Product Detail</a>
                                        </li>

                                        <li>
                                            <a href="../admin/add-product.php">
                                                <i class="fa fa-circle"></i>Add Product
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-circle"></i>
                                        <span>Digital</span>
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </a>

                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="category-digital.html">
                                                <i class="fa fa-circle"></i>Category
                                            </a>
                                        </li>

                                        <li>
                                            <a href="category-digitalsub.html">
                                                <i class="fa fa-circle"></i>Sub Category
                                            </a>
                                        </li>

                                        <li>
                                            <a href="product-listdigital.html">
                                                <i class="fa fa-circle"></i>Product List
                                            </a>
                                        </li>

                                        <li>
                                            <a href="add-digital-product.html">
                                                <i class="fa fa-circle"></i>Add Product
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="product-review.html">
                                        <i class="fa fa-circle"></i>
                                        <span>product Review</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="archive"></i>
                                <span>Orders</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>

                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="order-list.html">
                                        <i class="fa fa-circle"></i>
                                        <span>Order List</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="order-tracking.html">
                                        <i class="fa fa-circle"></i>
                                        <span>Order Tracking</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="order-detail.html">
                                        <i class="fa fa-circle"></i>
                                        <span>Order Details</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="dollar-sign"></i>
                                <span>Sales</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="order.html">
                                        <i class="fa fa-circle"></i>Orders
                                    </a>
                                </li>
                                <li>
                                    <a href="transactions.html">
                                        <i class="fa fa-circle"></i>Transactions
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="tag"></i>
                                <span>Coupons</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="coupon-list.html">
                                        <i class="fa fa-circle"></i>List Coupons
                                    </a>
                                </li>
                                <li>
                                    <a href="coupon-create.html">
                                        <i class="fa fa-circle"></i>Create Coupons
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="clipboard"></i>
                                <span>Pages</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="pages-list.html">
                                        <i class="fa fa-circle"></i>List Page
                                    </a>
                                </li>
                                <li>
                                    <a href="page-create.html">
                                        <i class="fa fa-circle"></i>Create Page
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="sidebar-header" href="media.html">
                                <i data-feather="camera"></i>
                                <span>Media</span>
                            </a>
                        </li>

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="align-left"></i>
                                <span>Menus</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="menu-list.html">
                                        <i class="fa fa-circle"></i>Menu Lists
                                    </a>
                                </li>
                                <li>
                                    <a href="create-menu.html">
                                        <i class="fa fa-circle"></i>Create Menu
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="user-plus"></i>
                                <span>Users</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="user-list.html">
                                        <i class="fa fa-circle"></i>User List
                                    </a>
                                </li>
                                <li>
                                    <a href="create-user.html">
                                        <i class="fa fa-circle"></i>Create User
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="users"></i>
                                <span>Vendors</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="list-vendor.html">
                                        <i class="fa fa-circle"></i>Vendor List
                                    </a>
                                </li>
                                <li>
                                    <a href="create-vendors.html">
                                        <i class="fa fa-circle"></i>Create Vendor
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="chrome"></i>
                                <span>Localization</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="translations.html"><i class="fa fa-circle"></i>Translations
                                    </a>
                                </li>
                                <li>
                                    <a href="currency-rates.html"><i class="fa fa-circle"></i>Currency Rates
                                    </a>
                                </li>
                                <li>
                                    <a href="taxes.html"><i class="fa fa-circle"></i>Taxes
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="sidebar-header" href="support-ticket.html"><i
                                    data-feather="phone"></i><span>Support Ticket</span>
                            </a>
                        </li>

                        <li>
                            <a class="sidebar-header" href="reports.html"><i
                                    data-feather="bar-chart"></i><span>Reports</span>
                            </a>
                        </li>

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)"><i
                                    data-feather="settings"></i><span>Settings</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="profile.html"><i class="fa fa-circle"></i>Profile
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="sidebar-header" href="invoice.html"><i
                                    data-feather="archive"></i><span>Invoice</span></a>
                        </li>

                        <li>
                            <a class="sidebar-header" href="forgot-password.html">
                                <i data-feather="key"></i>
                                <span>Forgot Password</span>
                            </a>
                        </li>

                        <li>
                            <a class="sidebar-header" href="login.html">
                                <i data-feather="log-in"></i>
                                <span>Login</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Page Sidebar Ends-->

            <!-- Right sidebar Start-->
            <div class="right-sidebar" id="right_side_bar">
                <div>
                    <div class="container p-0">
                        <div class="modal-header p-l-20 p-r-20">
                            <div class="col-sm-8 p-0">
                                <h6 class="modal-title font-weight-bold">FRIEND LIST</h6>
                            </div>
                            <div class="col-sm-4 text-end p-0">
                                <i class="me-2" data-feather="settings"></i>
                            </div>
                        </div>
                    </div>
                    <div class="friend-list-search mt-0">
                        <input type="text" placeholder="search friend">
                        <i class="fa fa-search"></i>
                    </div>
                    <div class="p-l-30 p-r-30 friend-list-name">
                        <div class="chat-box">
                            <div class="people-list friend-list">
                                <ul class="list">
                                    <li class="clearfix">
                                        <img class="rounded-circle user-image blur-up lazyloaded"
                                            src="assets/images/dashboard/user.jpg" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="about">
                                            <div class="name">Vincent Porter</div>
                                            <div class="status">Online</div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img class="rounded-circle user-image blur-up lazyloaded"
                                            src="assets/images/dashboard/user1.jpg" alt="">
                                        <div class="status-circle away"></div>
                                        <div class="about">
                                            <div class="name">Ain Chavez</div>
                                            <div class="status">28 minutes ago</div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img class="rounded-circle user-image blur-up lazyloaded"
                                            src="assets/images/dashboard/user2.jpg" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="about">
                                            <div class="name">Kori Thomas</div>
                                            <div class="status">Online</div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img class="rounded-circle user-image blur-up lazyloaded"
                                            src="assets/images/dashboard/user3.jpg" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="about">
                                            <div class="name">Erica Hughes</div>
                                            <div class="status">Online</div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img class="rounded-circle user-image blur-up lazyloaded"
                                            src="assets/images/dashboard/user3.jpg" alt="">
                                        <div class="status-circle offline"></div>
                                        <div class="about">
                                            <div class="name">Ginger Johnston</div>
                                            <div class="status">2 minutes ago</div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img class="rounded-circle user-image blur-up lazyloaded"
                                            src="assets/images/dashboard/user5.jpg" alt="">
                                        <div class="status-circle away"></div>
                                        <div class="about">
                                            <div class="name">Prasanth Anand</div>
                                            <div class="status">2 hour ago</div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img class="rounded-circle user-image blur-up lazyloaded"
                                            src="assets/images/dashboard/designer.jpg" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="about">
                                            <div class="name">Hileri Jecno</div>
                                            <div class="status">Online</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right sidebar Ends-->

            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>Dashboard
                                        <small>Multikart Admin panel</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">
                                            <i data-feather="home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-3 col-md-6 xl-50">
                            <div class="card o-hidden">
                                <div class="warning-box card-body">
                                    <div class="media static-top-widget align-items-center">
                                        <div class="icons-widgets">
                                            <div class="align-self-center text-center">
                                                <i data-feather="navigation" class="font-warning"></i>
                                            </div>
                                        </div>
                                        <div class="media-body media-doller">
                                            <span class="m-0">Earnings</span>
                                            <h3 class="mb-0">$ <span class="counter">6659</span><small> This
                                                    Month</small>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6 xl-50">
                            <div class="card o-hidden">
                                <div class="secondary-box card-body">
                                    <div class="media static-top-widget align-items-center">
                                        <div class="icons-widgets">
                                            <div class="align-self-center text-center">
                                                <i data-feather="box" class="font-secondary"></i>
                                            </div>
                                        </div>
                                        <div class="media-body media-doller">
                                            <span class="m-0">Products</span>
                                            <h3 class="mb-0">$ <span class="counter">9856</span><small> This
                                                    Month</small>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6 xl-50">
                            <div class="card o-hidden">
                                <div class="primary-box card-body">
                                    <div class="media static-top-widget align-items-center">
                                        <div class="icons-widgets">
                                            <div class="align-self-center text-center"><i data-feather="message-square"
                                                    class="font-primary"></i></div>
                                        </div>
                                        <div class="media-body media-doller"><span class="m-0">Messages</span>
                                            <h3 class="mb-0">$ <span class="counter">893</span><small> This
                                                    Month</small></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6 xl-50">
                            <div class="card o-hidden">
                                <div class="danger-box card-body">
                                    <div class="media static-top-widget align-items-center">
                                        <div class="icons-widgets">
                                            <div class="align-self-center text-center"><i data-feather="users"
                                                    class="font-danger"></i></div>
                                        </div>
                                        <div class="media-body media-doller"><span class="m-0">New Vendors</span>
                                            <h3 class="mb-0">$ <span class="counter">5631</span><small> This
                                                    Month</small></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 xl-100">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Market Value</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="icofont icofont-simple-left"></i></li>
                                            <li><i class="view-html fa fa-code"></i></li>
                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                            <li><i class="icofont icofont-error close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="market-chart"></div>
                                    <div class="code-box-copy">
                                        <button class="code-box-copy__btn btn-clipboard"
                                            data-clipboard-target="#example-head" title="Copy"><i
                                                class="icofont icofont-copy-alt"></i></button>
                                        <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="market-chart"&gt;&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 xl-100">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Latest Orders</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="icofont icofont-simple-left"></i></li>
                                            <li><i class="view-html fa fa-code"></i></li>
                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                            <li><i class="icofont icofont-error close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="user-status table-responsive latest-order-table">
                                        <table class="table table-bordernone">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Order ID</th>
                                                    <th scope="col">Order Total</th>
                                                    <th scope="col">Payment Method</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td class="digits">$120.00</td>
                                                    <td class="font-danger">Bank Transfers</td>
                                                    <td class="digits">On Way</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td class="digits">$90.00</td>
                                                    <td class="font-secondary">Ewallets</td>
                                                    <td class="digits">Delivered</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td class="digits">$240.00</td>
                                                    <td class="font-warning">Cash</td>
                                                    <td class="digits">Delivered</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td class="digits">$120.00</td>
                                                    <td class="font-primary">Direct Deposit</td>
                                                    <td class="digits">$6523</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td class="digits">$50.00</td>
                                                    <td class="font-primary">Bank Transfers</td>
                                                    <td class="digits">Delivered</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <a href="order.html" class="btn btn-primary mt-4">View All Orders</a>
                                    </div>
                                    <div class="code-box-copy">
                                        <button class="code-box-copy__btn btn-clipboard"
                                            data-clipboard-target="#example-head1" title=""
                                            data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                        <pre class=" language-html"><code class=" language-html" id="example-head1">
&lt;div class="user-status table-responsive latest-order-table"&gt;
    &lt;table class="table table-bordernone"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Order ID&lt;/th&gt;
                &lt;th scope="col"&gt;Order Total&lt;/th&gt;
                &lt;th scope="col"&gt;Payment Method&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;1&lt;/td&gt;
                &lt;td class="digits"&gt;$120.00&lt;/td&gt;
                &lt;td class="font-secondary"&gt;Bank Transfers&lt;/td&gt;
                &lt;td class="digits"&gt;Delivered&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;2&lt;/td&gt;
                &lt;td class="digits"&gt;$90.00&lt;/td&gt;
                &lt;td class="font-secondary"&gt;Ewallets&lt;/td&gt;
                &lt;td class="digits"&gt;Delivered&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;3&lt;/td&gt;
                &lt;td class="digits"&gt;$240.00&lt;/td&gt;
                &lt;td class="font-secondary"&gt;Cash&lt;/td&gt;
                &lt;td class="digits"&gt;Delivered&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;4&lt;/td&gt;
                &lt;td class="digits"&gt;$120.00&lt;/td&gt;
                &lt;td class="font-primary"&gt;Direct Deposit&lt;/td&gt;
                &lt;td class="digits"&gt;Delivered&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;5&lt;/td&gt;
                &lt;td class="digits"&gt;$50.00&lt;/td&gt;
                &lt;td class="font-primary"&gt;Bank Transfers&lt;/td&gt;
                &lt;td class="digits"&gt;Delivered&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
                                    </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 xl-50">
                            <div class="card order-graph sales-carousel">
                                <div class="card-header b-header">
                                    <h6>Total Sales</h6>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="small-chartjs">
                                                <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="value-graph">
                                                <h3>42% <span><i class="fa fa-angle-up font-primary"></i></span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <span>Sales Last Month</span>
                                            <h2 class="mb-0">9054</h2>
                                            <p>0.25% <span><i class="fa fa-angle-up"></i></span></p>
                                        </div>

                                        <div class="bg-primary">
                                            <div class="small-box">
                                                <i data-feather="briefcase"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sales-contain">
                                        <h5 class="f-w-600">Gross sales of August</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 xl-50">
                            <div class="card order-graph sales-carousel">
                                <div class="card-header b-header">
                                    <h6>Total purchase</h6>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="small-chartjs">
                                                <div class="flot-chart-placeholder" id="simple-line-chart-sparkline">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="value-graph">
                                                <h3>20% <span><i class="fa fa-angle-up font-secondary"></i></span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <span>Monthly purchase</span>
                                            <h2 class="mb-0">2154</h2>
                                            <p>0.13% <span><i class="fa fa-angle-up"></i></span></p>
                                        </div>
                                        <div class="bg-secondary">
                                            <div class="small-box">
                                                <i data-feather="credit-card"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sales-contain">
                                        <h5 class="f-w-600">Avg Gross purchase</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 xl-50">
                            <div class="card order-graph sales-carousel">
                                <div class="card-header b-header">
                                    <h6>Total cash transaction</h6>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="small-chartjs">
                                                <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="value-graph">
                                                <h3>28% <span><i class="fa fa-angle-up font-warning"></i></span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <span>Cash on hand</span>
                                            <h2 class="mb-0">4672</h2>
                                            <p>0.8% <span><i class="fa fa-angle-up"></i></span></p>
                                        </div>
                                        <div class="bg-warning">
                                            <div class="small-box">
                                                <i data-feather="shopping-cart"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sales-contain">
                                        <h5 class="f-w-600">Details about cash</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 xl-50">
                            <div class="card order-graph sales-carousel">
                                <div class="card-header b-header">
                                    <h6>Daily Deposits</h6>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="small-chartjs">
                                                <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="value-graph">
                                                <h3>75% <span><i class="fa fa-angle-up font-danger"></i></span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <span>Security Deposits</span>
                                            <h2 class="mb-0">0782</h2>
                                            <p>0.25% <span><i class="fa fa-angle-up"></i></span></p>
                                        </div>
                                        <div class="bg-danger">
                                            <div class="small-box">
                                                <i data-feather="calendar"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sales-contain">
                                        <h5 class="f-w-600">Gross sales of June</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Buy / Sell</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="icofont icofont-simple-left"></i></li>
                                            <li><i class="view-html fa fa-code"></i></li>
                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                            <li><i class="icofont icofont-error close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body sell-graph">
                                    <canvas id="myGraph"></canvas>
                                    <div class="code-box-copy">
                                        <button class="code-box-copy__btn btn-clipboard"
                                            data-clipboard-target="#example-head3" title=""
                                            data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                        <pre class=" language-html"><code class=" language-html" id="example-head3">&lt;div class="card-body sell-graph"&gt;
   &lt;canvas id="myGraph"&gt;&lt;/canvas&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 xl-100">
                            <div class="card height-equal">
                                <div class="card-header">
                                    <h5>Goods return</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="icofont icofont-simple-left"></i></li>
                                            <li><i class="view-html fa fa-code"></i></li>
                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                            <li><i class="icofont icofont-error close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="user-status table-responsive products-table">
                                        <table class="table table-bordernone mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Details</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Simply dummy text of the printing</td>
                                                    <td class="digits">1</td>
                                                    <td class="font-primary">Pending</td>
                                                    <td class="digits">$6523</td>
                                                </tr>
                                                <tr>
                                                    <td>Long established</td>
                                                    <td class="digits">5</td>
                                                    <td class="font-secondary">Cancle</td>
                                                    <td class="digits">$6523</td>
                                                </tr>
                                                <tr>
                                                    <td>sometimes by accident</td>
                                                    <td class="digits">10</td>
                                                    <td class="font-secondary">Cancle</td>
                                                    <td class="digits">$6523</td>
                                                </tr>
                                                <tr>
                                                    <td>Classical Latin literature</td>
                                                    <td class="digits">9</td>
                                                    <td class="font-primary">Return</td>
                                                    <td class="digits">$6523</td>
                                                </tr>
                                                <tr>
                                                    <td>keep the site on the Internet</td>
                                                    <td class="digits">8</td>
                                                    <td class="font-primary">Pending</td>
                                                    <td class="digits">$6523</td>
                                                </tr>
                                                <tr>
                                                    <td>Molestiae consequatur</td>
                                                    <td class="digits">3</td>
                                                    <td class="font-secondary">Cancle</td>
                                                    <td class="digits">$6523</td>
                                                </tr>
                                                <tr>
                                                    <td>Pain can procure</td>
                                                    <td class="digits">8</td>
                                                    <td class="font-primary">Return</td>
                                                    <td class="digits">$6523</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="code-box-copy">
                                        <button class="code-box-copy__btn btn-clipboard"
                                            data-clipboard-target="#example-head4" title=""
                                            data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                        <pre class=" language-html"><code class=" language-html" id="example-head4">
&lt;div class="user-status table-responsive products-table"&gt;
    &lt;table class="table table-bordernone mb-0"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Details&lt;/th&gt;
                &lt;th scope="col"&gt;Quantity&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
                &lt;th scope="col"&gt;Price&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;Simply dummy text of the printing&lt;/td&gt;
                &lt;td class="digits"&gt;1&lt;/td&gt;
                &lt;td class="font-primary"&gt;Pending&lt;/td&gt;
                &lt;td class="digits"&gt;$6523&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Long established&lt;/td&gt;
                &lt;td class="digits"&gt;5&lt;/td&gt;
                &lt;td class="font-secondary"&gt;Cancle&lt;/td&gt;
                &lt;td class="digits"&gt;$6523&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;sometimes by accident&lt;/td&gt;
                &lt;td class="digits"&gt;10&lt;/td&gt;
                &lt;td class="font-secondary"&gt;Cancle&lt;/td&gt;
                &lt;td class="digits"&gt;$6523&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Classical Latin literature&lt;/td&gt;
                &lt;td class="digits"&gt;9&lt;/td&gt;
                &lt;td class="font-primary"&gt;Return&lt;/td&gt;
                &lt;td class="digits"&gt;$6523&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;keep the site on the Internet&lt;/td&gt;
                &lt;td class="digits"&gt;8&lt;/td&gt;
                &lt;td class="font-primary"&gt;Pending&lt;/td&gt;
                &lt;td class="digits"&gt;$6523&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Molestiae consequatur&lt;/td&gt;
                &lt;td class="digits"&gt;3&lt;/td&gt;
                &lt;td class="font-secondary"&gt;Cancle&lt;/td&gt;
                &lt;td class="digits"&gt;$6523&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Pain can procure&lt;/td&gt;
                &lt;td class="digits"&gt;8&lt;/td&gt;
                &lt;td class="font-primary"&gt;Return&lt;/td&gt;
                &lt;td class="digits"&gt;$6523&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
                                    </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 xl-100">
                            <div class="card height-equal">
                                <div class="card-header">
                                    <h5>Empolyee Status</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="icofont icofont-simple-left"></i></li>
                                            <li><i class="view-html fa fa-code"></i></li>
                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                            <li><i class="icofont icofont-error close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="user-status table-responsive products-table">
                                        <table class="table table-bordernone mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Designation</th>
                                                    <th scope="col">Skill Level</th>
                                                    <th scope="col">Experience</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="bd-t-none u-s-tb">
                                                        <div class="align-middle image-sm-size"><img
                                                                class="img-radius align-top m-r-15 blur-up lazyloaded"
                                                                src="assets/images/dashboard/user2.jpg" alt=""
                                                                data-original-title="" title="">
                                                            <div class="d-inline-block">
                                                                <h6 class="mb-0">John Deo <span
                                                                        class="text-muted digits">(14+
                                                                        Online)</span></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Designer</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress" style="height: 8px;">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 30%" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="digits">2 Year</td>
                                                </tr>
                                                <tr>
                                                    <td class="bd-t-none u-s-tb">
                                                        <div class="align-middle image-sm-size"><img
                                                                class="img-radius align-top m-r-15 blur-up lazyloaded"
                                                                src="assets/images/dashboard/user1.jpg" alt=""
                                                                data-original-title="" title="">
                                                            <div class="d-inline-block">
                                                                <h6 class="mb-0">Holio Mako <span
                                                                        class="text-muted digits">(250+ Online)</span>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Developer</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress" style="height: 8px;">
                                                                <div class="progress-bar bg-secondary"
                                                                    role="progressbar" style="width: 70%"
                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="digits">3 Year</td>
                                                </tr>
                                                <tr>
                                                    <td class="bd-t-none u-s-tb">
                                                        <div class="align-middle image-sm-size"><img
                                                                class="img-radius align-top m-r-15 blur-up lazyloaded"
                                                                src="assets/images/dashboard/user3.jpg" alt=""
                                                                data-original-title="" title="">
                                                            <div class="d-inline-block">
                                                                <h6 class="mb-0">Mohsib lara<span
                                                                        class="text-muted digits">(99+ Online)</span>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Tester</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress" style="height: 8px;">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 60%" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="digits">5 Month</td>
                                                </tr>
                                                <tr>
                                                    <td class="bd-t-none u-s-tb">
                                                        <div class="align-middle image-sm-size"><img
                                                                class="img-radius align-top m-r-15 blur-up lazyloaded"
                                                                src="assets/images/dashboard/user.jpg" alt=""
                                                                data-original-title="" title="">
                                                            <div class="d-inline-block">
                                                                <h6 class="mb-0">Hileri Soli <span
                                                                        class="text-muted digits">(150+ Online)</span>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Designer</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress" style="height: 8px;">
                                                                <div class="progress-bar bg-secondary"
                                                                    role="progressbar" style="width: 30%"
                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="digits">3 Month</td>
                                                </tr>
                                                <tr>
                                                    <td class="bd-t-none u-s-tb">
                                                        <div class="align-middle image-sm-size"><img
                                                                class="img-radius align-top m-r-15 blur-up lazyloaded"
                                                                src="assets/images/dashboard/designer.jpg" alt=""
                                                                data-original-title="" title="">
                                                            <div class="d-inline-block">
                                                                <h6 class="mb-0">Pusiz bia <span
                                                                        class="text-muted digits">(14+ Online)</span>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Designer</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress" style="height: 8px;">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 90%" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="digits">5 Year</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="code-box-copy">
                                        <button class="code-box-copy__btn btn-clipboard"
                                            data-clipboard-target="#example-head5" title=""
                                            data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                        <pre class=" language-html"><code class=" language-html" id="example-head5">
&lt;div class="user-status table-responsive products-table"&gt;
    &lt;table class="table table-bordernone mb-0"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;Name&lt;/th&gt;
                &lt;th scope="col"&gt;Designation&lt;/th&gt;
                &lt;th scope="col"&gt;Skill Level&lt;/th&gt;
                &lt;th scope="col"&gt;Experience&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
                &lt;tr&gt;
                    &lt;td class="bd-t-none u-s-tb"&gt;
                        &lt;div class="align-middle image-sm-size"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="assets/images/dashboard/user2.jpg" alt="" data-original-title="" title=""&gt;
                        &lt;div class="d-inline-block"&gt;
                        &lt;h6&gt;John Deo &lt;span class="text-muted digits"&gt;(14+ Online)&lt;/span&gt;&lt;/h6&gt;
                        &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/td&gt;
                    &lt;td&gt;Designer&lt;/td&gt;
                    &lt;td&gt;
                        &lt;div class="progress-showcase"&gt;
                        &lt;div class="progress" style="height: 8px;"&gt;
                        &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
                        &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/td&gt;
                    &lt;td class="digits"&gt;2 Year&lt;/td&gt;
                &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="bd-t-none u-s-tb"&gt;
                    &lt;div class="align-middle image-sm-size"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="assets/images/dashboard/user1.jpg" alt="" data-original-title="" title=""&gt;
                    &lt;div class="d-inline-block"&gt;
                    &lt;h6&gt;Holio Mako &lt;span class="text-muted digits"&gt;(250+ Online)&lt;/span&gt;&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;Developer&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress-showcase"&gt;
                    &lt;div class="progress" style="height: 8px;"&gt;
                    &lt;div class="progress-bar bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class="digits"&gt;3 Year&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="bd-t-none u-s-tb"&gt;
                    &lt;div class="align-middle image-sm-size"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="assets/images/dashboard/user3.jpg" alt="" data-original-title="" title=""&gt;
                    &lt;div class="d-inline-block"&gt;
                    &lt;h6&gt;Mohsib lara&lt;span class="text-muted digits"&gt;(99+ Online)&lt;/span&gt;&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;Tester&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress-showcase"&gt;
                    &lt;div class="progress" style="height: 8px;"&gt;
                    &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class="digits"&gt;5 Month&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="bd-t-none u-s-tb"&gt;
                    &lt;div class="align-middle image-sm-size"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="assets/images/dashboard/user.jpg" alt="" data-original-title="" title=""&gt;
                    &lt;div class="d-inline-block"&gt;
                    &lt;h6&gt;Hileri Soli &lt;span class="text-muted digits"&gt;(150+ Online)&lt;/span&gt;&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;Designer&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress-showcase"&gt;
                    &lt;div class="progress" style="height: 8px;"&gt;
                    &lt;div class="progress-bar bg-secondary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class="digits"&gt;3 Month&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="bd-t-none u-s-tb"&gt;
                    &lt;div class="align-middle image-sm-size"&gt;&lt;img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="assets/images/dashboard/designer.jpg" alt="" data-original-title="" title=""&gt;
                    &lt;div class="d-inline-block"&gt;
                    &lt;h6&gt;Pusiz bia &lt;span class="text-muted digits"&gt;(14+ Online)&lt;/span&gt;&lt;/h6&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;Designer&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="progress-showcase"&gt;
                    &lt;div class="progress" style="height: 8px;"&gt;
                    &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class="digits"&gt;5 Year&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
                                    </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Sales Status</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="icofont icofont-simple-left"></i></li>
                                            <li><i class="view-html fa fa-code"></i></li>
                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                            <li><i class="icofont icofont-error close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-3 col-sm-6 xl-50">
                                            <div class="order-graph">
                                                <h6>Orders By Location</h6>
                                                <div class="chart-block chart-vertical-center">
                                                    <canvas id="myDoughnutGraph"></canvas>
                                                </div>
                                                <div class="order-graph-bottom">
                                                    <div class="media">
                                                        <div class="order-color-primary"></div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0">Saint Lucia <span
                                                                    class="pull-right">$157</span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="order-color-secondary"></div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0">Kenya <span class="pull-right">$347</span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="order-color-danger"></div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0">Liberia<span class="pull-right">$468</span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="order-color-warning"></div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0">Christmas Island<span
                                                                    class="pull-right">$742</span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="order-color-success"></div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0">Saint Helena <span
                                                                    class="pull-right">$647</span></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 xl-50">
                                            <div class="order-graph sm-order-space">
                                                <h6>Sales By Location</h6>
                                                <div class="peity-chart-dashboard text-center">
                                                    <span class="pie-colours-1">4,7,6,5</span>
                                                </div>
                                                <div class="order-graph-bottom sales-location">
                                                    <div class="media">
                                                        <div class="order-shape-primary"></div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 me-0">Germany <span
                                                                    class="pull-right">25%</span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="order-shape-secondary"></div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 me-0">Brasil <span
                                                                    class="pull-right">10%</span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="order-shape-danger"></div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 me-0">United Kingdom<span
                                                                    class="pull-right">34%</span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="order-shape-warning"></div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 me-0">Australia<span
                                                                    class="pull-right">5%</span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="order-shape-success"></div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 me-0">Canada <span
                                                                    class="pull-right">25%</span></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 xl-100">
                                            <div class="order-graph xl-space">
                                                <h6>Revenue for last month</h6>
                                                <div class="ct-4 flot-chart-container"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="code-box-copy">
                                        <button class="code-box-copy__btn btn-clipboard"
                                            data-clipboard-target="#example-head2" title="" data-original-title="Copy">
                                            <i class="icofont icofont-copy-alt"></i>
                                        </button>
                                        <pre class=" language-html">
                                            <code class=" language-html" id="example-head2">&lt;div class="row"&gt;
   &lt;div class="col-xl-3 col-sm-6 xl-50"&gt;
      &lt;div class="order-graph"&gt;
         &lt;h6&gt;Orders By Location&lt;/h6&gt;
         &lt;div class="chart-block chart-vertical-center"&gt;
            &lt;canvas id="myDoughnutGraph"&gt;&lt;/canvas&gt;
         &lt;/div&gt;
         &lt;div class="order-graph-bottom"&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-color-primary"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0"&gt;Saint Lucia &lt;span class="pull-right"&gt;$157&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-color-secondary"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0"&gt;Kenya &lt;span class="pull-right"&gt;$347&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-color-danger"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0"&gt;Liberia&lt;span class="pull-right"&gt;$468&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-color-warning"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0"&gt;Christmas Island&lt;span class="pull-right"&gt;$742&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-color-success"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0"&gt;Saint Helena &lt;span class="pull-right"&gt;$647&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-xl-3 col-sm-6 xl-50"&gt;
      &lt;div class="order-graph sm-order-space"&gt;
         &lt;h6&gt;Sales By Location&lt;/h6&gt;
         &lt;div class="peity-chart-dashboard text-center"&gt;
            &lt;span class="pie-colours-1"&gt;4,7,6,5&lt;/span&gt;
         &lt;/div&gt;
         &lt;div class="order-graph-bottom sales-location"&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-shape-primary"&gt;&lt;/div&gt;
                  &lt;div class="media-body"&gt;
                     &lt;h6 class="mb-0 me-0"&gt;Germany &lt;span class="pull-right"&gt;25%&lt;/span&gt;&lt;/h6&gt;
                  &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-shape-secondary"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0 me-0"&gt;Brasil &lt;span class="pull-right"&gt;10%&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-shape-danger"&gt;&lt;/div&gt;
                  &lt;div class="media-body"&gt;
                     &lt;h6 class="mb-0 me-0"&gt;United Kingdom&lt;span class="pull-right"&gt;34%&lt;/span&gt;&lt;/h6&gt;
                  &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-shape-warning"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0 me-0"&gt;Australia&lt;span class="pull-right"&gt;5%&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-shape-success"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0 me-0"&gt;Canada &lt;span class="pull-right"&gt;25%&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-xl-6 xl-100"&gt;
      &lt;div class="order-graph xl-space"&gt;
         &lt;h6&gt;Revenue for last month&lt;/h6&gt;
         &lt;div class="ct-4 flot-chart-container"&gt;&lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;</code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>

            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright text-start">
                            <p class="mb-0">Copyright 2024 © Multikart All rights reserved.</p>
                        </div>
                        <div class="col-md-6 pull-right text-end">
                            <p class=" mb-0">Hand crafted & made with<i class="ri-heart-line"></i></p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer end-->
        </div>
    </div>

    <div class="bottom-space"></div>

    <!-- latest jquery-->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>

    <!--chartist js-->
    <script src="assets/js/chart/chartist/chartist.js"></script>

    <!--chartjs js-->
    <script src="assets/js/chart/chartjs/chart.min.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!--copycode js-->
    <script src="assets/js/prism/prism.min.js"></script>
    <script src="assets/js/clipboard/clipboard.min.js"></script>
    <script src="assets/js/custom-card/custom-card.js"></script>

    <!--counter js-->
    <script src="assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="assets/js/counter/jquery.counterup.min.js"></script>
    <script src="assets/js/counter/counter-custom.js"></script>

    <!--peity chart js-->
    <script src="assets/js/chart/peity-chart/peity.jquery.js"></script>

    <!-- Apex Chart Js -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!--sparkline chart js-->
    <script src="assets/js/chart/sparkline/sparkline.js"></script>

    <!--Customizer admin-->
    <script src="assets/js/admin-customizer.js"></script>

    <!--dashboard custom js-->
    <script src="assets/js/dashboard/default.js"></script>

    <!--right sidebar js-->
    <script src="assets/js/chat-menu.js"></script>

    <!--height equal js-->
    <script src="assets/js/height-equal.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!--script admin-->
    <script src="assets/js/admin-script.js"></script>
</body>

</html>