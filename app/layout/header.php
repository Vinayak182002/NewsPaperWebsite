<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SoftMedics</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/common.css" rel="stylesheet">


    <!-- Datatable CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.22/b-1.6.4/b-colvis-1.6.4/b-flash-1.6.4/b-html5-1.6.4/b-print-1.6.4/fc-3.3.1/fh-3.1.7/r-2.2.6/sc-2.0.3/sb-1.0.0/sl-1.3.1/datatables.min.css" />

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Datepicker -->
    <link rel="stylesheet" href="../vendor/jquery-ui-1.12.1.custom/jquery-ui.css">
    <link rel="stylesheet" href="../vendor/datetimepicker/bootstrap-datetimepicker.min.css">

    <!-----Start cards files---->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--<script type="text/javascript" src="../../js/bootstrap.min.js"></script>-->
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../../js/counter.js"></script>
    <!-----End cards files---->
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon">
            <img src="../../assets/images/logo1.jpeg" class="img-responsive" style="width: 60px;">
            </div>
            <div class="sidebar-brand-text mx-3"> Super Admin </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        
        <li class="nav-item">
            <a class="nav-link" href="../view/headlines.php">
                <i class="fas fa-clipboard"></i>
                <span>Headlines</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../view/imp_news.php">
                <i class="fas fa-clipboard"></i>
                <span>Important News</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../view/scroll_news.php">
                <i class="fas fa-clipboard"></i>
                <span>Scrolling News</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../view/main_news.php">
                <i class="fas fa-clipboard"></i>
                <span>Main News</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../view/featured_news.php">
                <i class="fas fa-clipboard"></i>
                <span>Featured News</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../view/body_news.php">
                <i class="fas fa-clipboard"></i>
                <span> Body News</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../view/missed.php">
                <i class="fas fa-clipboard"></i>
                <span>You may have missed</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../view/regional.php">
                <i class="fas fa-clipboard"></i>
                <span>Regional</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>



    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

    
        <!-- Main Content -->
        <div id="content">
       
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    
                   <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"> ADMIN </span>
                            <img class="img-profile rounded-circle" src="../../assets/images/logo.jpg">
                        </a>
                        
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" 
                        aria-labelledby="userDropdown">
                            
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal" >
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                LOGOUT
                            </a>

                </ul>
                

            </nav>
            <!-- End of Topbar -->
    