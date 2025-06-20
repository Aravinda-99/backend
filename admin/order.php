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

    <!-- Datatables css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/datatables.css">

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
                        <label class="switch"><a href="javascript:void(0)"><i id="sidebar-toggle"
                                    data-feather="align-left"></i></a></label>
                    </div>
                </div>
                <div class="nav-right col">
                    <ul class="nav-menus">
                        <li>
                            <form class="form-inline search-form">
                                <div class="form-group">
                                    <input class="form-control-plaintext" type="search" placeholder="Search.."><span
                                        class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                                </div>
                            </form>
                        </li>
                        <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                                    data-feather="maximize-2"></i></a></li>
                        <li class="onhover-dropdown"><a class="txt-dark" href="javascript:void(0)">
                                <h6>EN</h6>
                            </a>
                            <ul class="language-dropdown onhover-show-div p-20">
                                <li><a href="javascript:void(0)" data-lng="en"><i class="flag-icon flag-icon-is"></i>
                                        English</a></li>
                                <li><a href="javascript:void(0)" data-lng="es"><i class="flag-icon flag-icon-um"></i>
                                        Spanish</a></li>
                                <li><a href="javascript:void(0)" data-lng="pt"><i class="flag-icon flag-icon-uy"></i>
                                        Portuguese</a></li>
                                <li><a href="javascript:void(0)" data-lng="fr"><i class="flag-icon flag-icon-nz"></i>
                                        French</a></li>
                            </ul>
                        </li>
                        <li class="onhover-dropdown"><i data-feather="bell"></i><span
                                class="badge badge-pill badge-primary pull-right notification-badge">3</span><span
                                class="dot"></span>
                            <ul class="notification-dropdown onhover-show-div p-0">
                                <li>Notification <span class="badge badge-pill badge-primary pull-right">3</span></li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mt-0"><span><i class="shopping-color"
                                                        data-feather="shopping-bag"></i></span>Your order ready for
                                                Ship..!</h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mt-0 txt-success"><span><i class="download-color font-success"
                                                        data-feather="download"></i></span>Download Complete</h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mt-0 txt-danger"><span><i class="alert-color font-danger"
                                                        data-feather="alert-circle"></i></span>250 MB trash files</h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="bg-light txt-dark"><a href="javascript:void(0)">All</a> notification</li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)"><i class="right_side_toggle"
                                    data-feather="message-square"></i><span class="dot"></span></a></li>
                        <li class="onhover-dropdown">
                            <div class="media align-items-center"><img
                                    class="align-self-center pull-right img-50 blur-up lazyloaded"
                                    src="assets/images/dashboard/user3.jpg" alt="header-user">
                                <div class="dotted-animation"><span class="animate-circle"></span><span
                                        class="main-circle"></span></div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div p-20">
                                <li><a href="javascript:void(0)"><i data-feather="user"></i>Edit Profile</a></li>
                                <li><a href="javascript:void(0)"><i data-feather="mail"></i>Inbox</a></li>
                                <li><a href="javascript:void(0)"><i data-feather="lock"></i>Lock Screen</a></li>
                                <li><a href="javascript:void(0)"><i data-feather="settings"></i>Settings</a></li>
                                <li><a href="javascript:void(0)"><i data-feather="log-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
                </div>
            </div>
        </div>
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            <div class="page-sidebar">
                <div class="main-header-left d-none d-lg-block">
                    <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded"
                                src="assets/images/dashboard/multikart-logo.png" alt=""></a></div>
                </div>
                <div class="sidebar custom-scrollbar">
                    <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                            aria-hidden="true"></i></a>
                    <ul class="sidebar-menu">
                        <li>
                            <a class="sidebar-header" href="index.html">
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
                                            <a href="category.html">
                                                <i class="fa fa-circle"></i>Category
                                            </a>
                                        </li>

                                        <li>
                                            <a href="category-sub.html">
                                                <i class="fa fa-circle"></i>Sub Category</a>
                                        </li>

                                        <li>
                                            <a href="product-list.html">
                                                <i class="fa fa-circle"></i>Product List</a>
                                        </li>

                                        <li>
                                            <a href="product-detail.html">
                                                <i class="fa fa-circle"></i>Product Detail</a>
                                        </li>

                                        <li>
                                            <a href="add-product.html">
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
                                    <h3>Orders
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
                                    <li class="breadcrumb-item">Sales</li>
                                    <li class="breadcrumb-item active">Orders</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <!-- <div class="card-header">
                                    <h5>Manage Order</h5>
                                </div> -->
                                <div class="card-body order-datatable">
                                    <table class="display" id="basic-1">
                                        <thead>
                                            <tr>
                                                <th>Order Id</th>
                                                <th>Product</th>
                                                <th>Payment Status</th>
                                                <th>Payment Method</th>
                                                <th>Order Status</th>
                                                <th>Date</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#51240</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/25.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/13.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/16.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                                                <td>Paypal</td>
                                                <td><span class="badge badge-success">Delivered</span></td>
                                                <td>Dec 10,18</td>
                                                <td>$54671</td>
                                            </tr>
                                            <tr>
                                                <td>#51241</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/12.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/3.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Master Card</td>
                                                <td><span class="badge badge-primary">Shipped</span></td>
                                                <td>Feb 15,18</td>
                                                <td>$2136</td>
                                            </tr>
                                            <tr>
                                                <td>#51242</td>
                                                <td><img src="assets/images/electronics/product/14.jpg" alt=""
                                                        class="img-fluid img-30 blur-up lazyloaded"></td>
                                                <td><span class="badge badge-warning">Awaiting Authentication</span>
                                                </td>
                                                <td>Debit Card</td>
                                                <td><span class="badge badge-warning">Processing</span></td>
                                                <td>Mar 27,18</td>
                                                <td>$8791</td>
                                            </tr>
                                            <tr>
                                                <td>#51243</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/6.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/furniture/8.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-danger">Payment Failed</span></td>
                                                <td>Master Card</td>
                                                <td><span class="badge badge-danger">Cancelled</span></td>
                                                <td>Sep 1,18</td>
                                                <td>$139</td>
                                            </tr>
                                            <tr>
                                                <td>#51244</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/jewellery/pro/18.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/fashion/pro/06.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Paypal</td>
                                                <td><span class="badge badge-primary">Shipped</span></td>
                                                <td>May 18,18</td>
                                                <td>$4678</td>
                                            </tr>
                                            <tr>
                                                <td>#51245</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/19.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/20.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/23.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Visa</td>
                                                <td><span class="badge badge-success">Delivered</span></td>
                                                <td>Jan 14,18</td>
                                                <td>$6791</td>
                                            </tr>
                                            <tr>
                                                <td>#51246</td>
                                                <td><img src="assets/images/electronics/product/24.jpg" alt=""
                                                        class="img-fluid img-30 blur-up lazyloaded"></td>
                                                <td><span class="badge badge-warning">Awaiting Authentication</span>
                                                </td>
                                                <td>Credit Card</td>
                                                <td><span class="badge badge-warning">Processing</span></td>
                                                <td>Apr 22,18</td>
                                                <td>$976</td>
                                            </tr>
                                            <tr>
                                                <td>#51247</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/21.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/8.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-danger">Payment Failed</span></td>
                                                <td>Master Card</td>
                                                <td><span class="badge badge-danger">Cancelled</span></td>
                                                <td>Mar 26,18</td>
                                                <td>$3212</td>
                                            </tr>
                                            <tr>
                                                <td>#51248</td>
                                                <td><img src="assets/images/electronics/product/18.jpg" alt=""
                                                        class="img-fluid img-30 blur-up lazyloaded"></td>
                                                <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                                                <td>Paypal</td>
                                                <td><span class="badge badge-primary">Shipped</span></td>
                                                <td>Feb 29,18</td>
                                                <td>$6719</td>
                                            </tr>
                                            <tr>
                                                <td>#51249</td>
                                                <td><img src="assets/images/electronics/product/17.jpg" alt=""
                                                        class="img-fluid img-30 blur-up lazyloaded"></td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Master Card</td>
                                                <td><span class="badge badge-secondary">Processing</span></td>
                                                <td>Sep 2,18</td>
                                                <td>$9765</td>
                                            </tr>
                                            <tr>
                                                <td>#51250</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <img src="assets/images/electronics/product/7.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/4.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Credit Card</td>
                                                <td><span class="badge badge-primary">Shipped</span></td>
                                                <td>Dec 10,18</td>
                                                <td>$9706</td>
                                            </tr>
                                            <tr>
                                                <td>#51251</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/22.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/20.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-secondary">Cash On Delivered</span></td>
                                                <td>Paypal</td>
                                                <td><span class="badge badge-primary">Shipped</span></td>
                                                <td>Feb 15,18</td>
                                                <td>$1500</td>
                                            </tr>
                                            <tr>
                                                <td>#51252</td>
                                                <td>
                                                    <img src="assets/images/electronics/product/3.jpg" alt=""
                                                        class="img-fluid img-30 blur-up lazyloaded">
                                                </td>
                                                <td><span class="badge badge-danger">Payment Failed</span></td>
                                                <td>Credit Card</td>
                                                <td><span class="badge badge-danger">Cancelled</span></td>
                                                <td>Mar 27,18</td>
                                                <td>$18.97</td>
                                            </tr>
                                            <tr>
                                                <td>#51253</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/11.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/2.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/9.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Visa</td>
                                                <td><span class="badge badge-success">Delivered</span></td>
                                                <td>Mar 30,18</td>
                                                <td>$3478</td>
                                            </tr>
                                            <tr>
                                                <td>#51254</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/pro/4.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/pro/5.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-warning">Awaiting Authentication</span>
                                                </td>
                                                <td>0.80 %</td>
                                                <td><span class="badge badge-warning">Processing</span></td>
                                                <td>Apr 5,18</td>
                                                <td>$9672</td>
                                            </tr>
                                            <tr>
                                                <td>#51255</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/fashion/product/19.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/fashion/product/14.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-secondary">Cash On Delivered</span></td>
                                                <td>0.70 %</td>
                                                <td><span class="badge badge-primary">Shipped</span></td>
                                                <td>Apr 8,18</td>
                                                <td>$59.76</td>
                                            </tr>
                                            <tr>
                                                <td>#51256</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/furniture/6.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/furniture/product/1.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/furniture/7.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-danger">Payment Failed</span></td>
                                                <td>Paypal</td>
                                                <td><span class="badge badge-danger">Cancelled</span></td>
                                                <td>Apr 12,18</td>
                                                <td>$37.60</td>
                                            </tr>
                                            <tr>
                                                <td>#51257</td>
                                                <td>
                                                    <img src="assets/images/furniture/product/2.jpg" alt=""
                                                        class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Credit Card</td>
                                                <td><span class="badge badge-success">Delivered</span></td>
                                                <td>Apr 15,18</td>
                                                <td>$86.53</td>
                                            </tr>
                                            <tr>
                                                <td>#51258</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/furniture/product/3.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/furniture/product/4.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Master Card</td>
                                                <td><span class="badge badge-primary">Shipped</span></td>
                                                <td>Apr 20,18</td>
                                                <td>$97.06</td>
                                            </tr>
                                            <tr>
                                                <td>#51259</td>
                                                <td><img src="assets/images/flower/blog/insta/8.jpg" alt=""
                                                        class="img-fluid img-30 me-2 blur-up lazyloaded"></td>
                                                <td><span class="badge badge-warning">Awaiting Authentication</span>
                                                </td>
                                                <td>Credit Card</td>
                                                <td><span class="badge badge-warning">processing</span></td>
                                                <td>Apr 24,18</td>
                                                <td>$16.78</td>
                                            </tr>
                                            <tr>
                                                <td>#51260</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/22.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/20.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                                                <td>Paypal</td>
                                                <td><span class="badge badge-success">Delivered</span></td>
                                                <td>Apr 27,18</td>
                                                <td>$86.00</td>
                                            </tr>
                                            <tr>
                                                <td>#51261</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/19.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/20.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/23.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Credit Card</td>
                                                <td><span class="badge badge-primary">Shipped</span></td>
                                                <td>May 1,18</td>
                                                <td>$17.84</td>
                                            </tr>
                                            <tr>
                                                <td>#51262</td>
                                                <td><img src="assets/images/electronics/product/24.jpg" alt=""
                                                        class="img-fluid img-30 blur-up lazyloaded"></td>
                                                <td><span class="badge badge-danger">Payment Failed</span></td>
                                                <td>Master Card</td>
                                                <td><span class="badge badge-danger">Cancelled</span></td>
                                                <td>May 8,18</td>
                                                <td>$35.07</td>
                                            </tr>
                                            <tr>
                                                <td>#51263</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/furniture/product/5.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/furniture/product/6.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Paypal</td>
                                                <td><span class="badge badge-success">Delivered</span></td>
                                                <td>Jun 4,18</td>
                                                <td>$5.67</td>
                                            </tr>
                                            <tr>
                                                <td>#51264</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/pro/4.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/pro/5.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-warning">Awaiting Authentication</span>
                                                </td>
                                                <td>Master Card</td>
                                                <td><span class="badge badge-warning">processing</span></td>
                                                <td>Apr 30,18</td>
                                                <td>$6.134</td>
                                            </tr>
                                            <tr>
                                                <td>#51265</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/furniture/6.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/furniture/product/7.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/furniture/7.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Credit Card</td>
                                                <td><span class="badge badge-primary">Shipped</span></td>
                                                <td>Jul 16,18</td>
                                                <td>$74.12</td>
                                            </tr>
                                            <tr>
                                                <td>#51266</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/7.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/4.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                                                <td>Paypal</td>
                                                <td><span class="badge badge-success">Delivered</span></td>
                                                <td>Aug 25,18</td>
                                                <td>$16.70</td>
                                            </tr>
                                            <tr>
                                                <td>#51267</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/19.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/20.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/23.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">paid</span></td>
                                                <td>Paypal</td>
                                                <td><span class="badge badge-success">Delivered</span></td>
                                                <td>Sep 7,18</td>
                                                <td>$9.706</td>
                                            </tr>
                                            <tr>
                                                <td>#51268</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/fashion/product/19.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/fashion/product/14.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-danger">Payment Failed</span></td>
                                                <td>Master Card</td>
                                                <td><span class="badge badge-danger">Cancelled</span></td>
                                                <td>Oct 19,18</td>
                                                <td>$67.04</td>
                                            </tr>
                                            <tr>
                                                <td>#51269</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/11.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/2.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/9.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Credit Card</td>
                                                <td><span class="badge badge-primary">Shipped</span></td>
                                                <td>Apr 12,18</td>
                                                <td>$867</td>
                                            </tr>
                                            <tr>
                                                <td>#51270</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/fashion/product/19.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/fashion/product/14.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Master Card</td>
                                                <td><span class="badge badge-primary">Shipped</span></td>
                                                <td>Sep 13,18</td>
                                                <td>$70.8</td>
                                            </tr>
                                            <tr>
                                                <td>#51271</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/19.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/20.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/23.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-warning">Awaiting Authentication</span>
                                                </td>
                                                <td>Paypal</td>
                                                <td><span class="badge badge-warning">Processing</span></td>
                                                <td>Aug 24,18</td>
                                                <td>$70.41</td>
                                            </tr>
                                            <tr>
                                                <td>#51272</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/furniture/product/8.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/furniture/product/9.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-danger">Payment Failed</span></td>
                                                <td>Credit Card</td>
                                                <td><span class="badge badge-danger">Cancelled</span></td>
                                                <td>Nov, 6,18</td>
                                                <td>$86.7</td>
                                            </tr>
                                            <tr>
                                                <td>#51273</td>
                                                <td><img src="assets/images/flower/blog/insta/8.jpg" alt=""
                                                        class="img-fluid img-30 me-2 blur-up lazyloaded"></td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Master Card</td>
                                                <td><span class="badge badge-success">Delivered</span></td>
                                                <td>Dec 17,18</td>
                                                <td>$19.47</td>
                                            </tr>
                                            <tr>
                                                <td>#51274</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/11.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/2.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/9.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Master Card</td>
                                                <td><span class="badge badge-primary">Shipped</span></td>
                                                <td>Nov 29,18</td>
                                                <td>$7.48</td>
                                            </tr>
                                            <tr>
                                                <td>#51275</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/19.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/20.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/23.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Master Card</td>
                                                <td><span class="badge badge-success">Delivered</span></td>
                                                <td>Jan 11,18</td>
                                                <td>$8.67</td>
                                            </tr>
                                            <tr>
                                                <td>#51276</td>
                                                <td>
                                                    <div class="d-flex  align-items-center">
                                                        <img src="assets/images/electronics/pro/4.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/pro/5.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-warning">Awaiting Authentication</span>
                                                </td>
                                                <td>Paypal</td>
                                                <td><span class="badge badge-warning">Processing</span></td>
                                                <td>Feb 12,18</td>
                                                <td>$8.607</td>
                                            </tr>
                                            <tr>
                                                <td>#51277</td>
                                                <td>
                                                    <img src="assets/images/electronics/product/24.jpg" alt=""
                                                        class="img-fluid img-30 blur-up lazyloaded">
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Paypal</td>
                                                <td><span class="badge badge-success">Delivered</span></td>
                                                <td>Apr 2,18</td>
                                                <td>$347</td>
                                            </tr>
                                            <tr>
                                                <td>#51278</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/7.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/4.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-danger">Payment Failed</span></td>
                                                <td>Credit Card</td>
                                                <td><span class="badge badge-danger">Cancelled</span></td>
                                                <td>May 5,18</td>
                                                <td>$100</td>
                                            </tr>
                                            <tr>
                                                <td>#51279</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/19.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/20.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/23.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-warning">Awaiting Authentication</span>
                                                </td>
                                                <td>Paypal</td>
                                                <td><span class="badge badge-warning">processing</span></td>
                                                <td>Jun 8,18</td>
                                                <td>$546.01</td>
                                            </tr>
                                            <tr>
                                                <td>#51280</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/fashion/product/19.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/fashion/product/14.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Credit Card</td>
                                                <td><span class="badge badge-success">Delivered</span></td>
                                                <td>Jan 19,18</td>
                                                <td>$7.154</td>
                                            </tr>
                                            <tr>
                                                <td>#51281</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/11.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/2.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/9.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Master Card</td>
                                                <td><span class="badge badge-primary">Shipped</span></td>
                                                <td>Apr 30,18</td>
                                                <td>$58.47</td>
                                            </tr>
                                            <tr>
                                                <td>#51282</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/furniture/product/10.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/furniture/product/11.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-danger">Payment Failed</span></td>
                                                <td>Paypal</td>
                                                <td><span class="badge badge-danger">Cancelled</span></td>
                                                <td>Jun 6,18</td>
                                                <td>$370.0</td>
                                            </tr>
                                            <tr>
                                                <td>#51283</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/19.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/20.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/23.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-warning">Awaiting Authentication</span>
                                                </td>
                                                <td>Master Card</td>
                                                <td><span class="badge badge-warning">Processing</span></td>
                                                <td>Aug 10,18</td>
                                                <td>$9.76</td>
                                            </tr>
                                            <tr>
                                                <td>#51284</td>
                                                <td><img src="assets/images/flower/blog/insta/8.jpg" alt=""
                                                        class="img-fluid img-30 me-2 blur-up lazyloaded"></td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Credit Card</td>
                                                <td><span class="badge badge-success">Delivered</span></td>
                                                <td>Sep 16,18</td>
                                                <td>$79.14</td>
                                            </tr>
                                            <tr>
                                                <td>#51285</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/furniture/product/12.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/furniture/product/13.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Master Card</td>
                                                <td><span class="badge badge-primary">Shipped</span></td>
                                                <td>Jun 7,18</td>
                                                <td>$15.00</td>
                                            </tr>
                                            <tr>
                                                <td>#51286</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/19.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/20.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/23.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-danger">Payment Failed</span></td>
                                                <td>Credit Card</td>
                                                <td><span class="badge badge-danger">Cancelled</span></td>
                                                <td>Apr 11,18</td>
                                                <td>$94.26</td>
                                            </tr>
                                            <tr>
                                                <td>#51287</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/furniture/product/14.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/furniture/product/15.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Paypal</td>
                                                <td><span class="badge badge-success">Delivered</span></td>
                                                <td>Mar 26,18</td>
                                                <td>$78.86</td>
                                            </tr>
                                            <tr>
                                                <td>#51288</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/pro/4.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/pro/5.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Credit Card</td>
                                                <td><span class="badge badge-primary">Shipped</span></td>
                                                <td>Jun 24,18</td>
                                                <td>$67.18</td>
                                            </tr>
                                            <tr>
                                                <td>#51289</td>
                                                <td>
                                                    <img src="assets/images/electronics/product/24.jpg" alt=""
                                                        class="img-fluid img-30 blur-up lazyloaded">
                                                </td>
                                                <td><span class="badge badge-warning">Awaiting Authentication</span>
                                                </td>
                                                <td>Master Card</td>
                                                <td><span class="badge badge-warning">Processing</span></td>
                                                <td>Apr 12,18</td>
                                                <td>$96.71</td>
                                            </tr>
                                            <tr>
                                                <td>#51290</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/19.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/20.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/23.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-warning">Awaiting Authentication</span>
                                                </td>
                                                <td>Paypal</td>
                                                <td><span class="badge badge-warning">Processing</span></td>
                                                <td>Jul 20,18</td>
                                                <td>$86.7</td>
                                            </tr>
                                            <tr>
                                                <td>#51291</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/7.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/4.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Credit Card</td>
                                                <td><span class="badge badge-primary">Shipped</span></td>
                                                <td>Aug 9,18</td>
                                                <td>$867</td>
                                            </tr>
                                            <tr>
                                                <td>#51292</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/furniture/product/16.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/furniture/product/17.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-danger">Payment Failed</span></td>
                                                <td>Master Card</td>
                                                <td><span class="badge badge-danger">Cancelled</span></td>
                                                <td>Jan 10,18</td>
                                                <td>$16.78</td>
                                            </tr>
                                            <tr>
                                                <td>#51293</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/25.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/13.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/16.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Paypal</td>
                                                <td><span class="badge badge-success">Delivered</span></td>
                                                <td>Sep 5,18</td>
                                                <td>$57.14</td>
                                            </tr>
                                            <tr>
                                                <td>#51294</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/electronics/product/11.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/electronics/product/9.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Credit Card</td>
                                                <td><span class="badge badge-success">Delivered</span></td>
                                                <td>Nov 16,18</td>
                                                <td>$74.45</td>
                                            </tr>
                                            <tr>
                                                <td>#51294</td>
                                                <td>
                                                    <img src="assets/images/flower/blog/insta/8.jpg" alt=""
                                                        class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                </td>
                                                <td><span class="badge badge-danger">Payment Failed</span></td>
                                                <td>Master Card</td>
                                                <td><span class="badge badge-danger">Cancelled</span></td>
                                                <td>Apr 12,18</td>
                                                <td>$864</td>
                                            </tr>
                                            <tr>
                                                <td>#51295</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/fashion/product/19.jpg" alt=""
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                        <img src="assets/images/fashion/product/14.jpg" alt=""
                                                            class="img-fluid img-30 blur-up lazyloaded">
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success">Paid</span></td>
                                                <td>Credit Card</td>
                                                <td><span class="badge badge-primary">Shipped</span></td>
                                                <td>Dec 19,18</td>
                                                <td>$19.78</td>
                                            </tr>
                                        </tbody>
                                    </table>
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

    <!-- Datatable js-->
    <script src="assets/js/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/datatables/custom-basic.js"></script>

    <!--Customizer admin-->
    <script src="assets/js/admin-customizer.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!--right sidebar js-->
    <script src="assets/js/chat-menu.js"></script>

    <!--script admin-->
    <script src="assets/js/admin-script.js"></script>

</body>

</html>