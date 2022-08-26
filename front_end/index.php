<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EPT Beauty</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
    <!-- My style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a href="index.php" class="navbar-brand">
                    <span class="brand-text font-weight-light">EPT Beauty</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Product</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">BestSeller</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Discount</a>
                        </li>
                    </ul>

                    <!-- SEARCH FORM -->
                    <form class="form-inline ml-0 ml-md-3 w-100">
                        <div class="w-100 input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <!-- Login Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="fa fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="admin/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Brad Diesel
                                            <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Call me whenever you can...</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                            </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">New Products</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container">
                <div class="row mb-2 justify-content-around">
                    <div class="card mt-4" style="width: 14rem;">
                        <div class="ribbon-wrapper">
                            <div class="ribbon  bg-primary">
                                New
                            </div>
                        </div>
                        <img src="images/VitaminC.jpeg" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-text">฿2,500</p>
                            <p class="card-text">BOBBI BROWN Vitamin Enriched Face Base 50 ml.</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-block btn-outline-dark">Buy</button>
                        </div>
                    </div>
                    <div class="card mt-4" style="width: 14rem;">
                        <div class="ribbon-wrapper">
                            <div class="ribbon  bg-primary">
                                New
                            </div>
                        </div>
                        <img src="images/HydratingWaterFreshCream.jpeg" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-text">฿2,400</p>
                            <p class="card-text">BOBBI BROWN Hydrating Water Fresh Cream 50 ml.</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-block btn-outline-dark">Buy</button>
                        </div>
                    </div>
                    <div class="card mt-4" style="width: 14rem;">
                        <div class="ribbon-wrapper">
                            <div class="ribbon  bg-primary">
                                New
                            </div>
                        </div>
                        <img src="images/EXTRA REPAIR SERUM.webp" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-text">฿4,500</p>
                            <p class="card-text">BOBBI BROWN EXTRA REPAIR SERUM</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-block btn-outline-dark">Buy</button>
                        </div>
                    </div>
                    <div class="card mt-4" style="width: 14rem;">
                        <div class="ribbon-wrapper">
                            <div class="ribbon  bg-primary">
                                New
                            </div>
                        </div>
                        <img src="images/Soothing Cleansing Oil.webp" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-text">฿2,150</p>
                            <p class="card-text">BOBBI BROWN Soothing Cleansing Oil 200 ml.</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-block btn-outline-dark">Buy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="admin/dist/js/adminlte.min.js"></script>
</body>

</html>