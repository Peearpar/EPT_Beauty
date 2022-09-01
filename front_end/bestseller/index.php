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
    <link rel="stylesheet" href="../admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../admin/dist/css/adminlte.min.css">
    <!-- My style -->
    <link rel="stylesheet" href="../css/style.css">
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
                            <a href="../index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="../new_product/index.php" class="nav-link">NewProduct</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">BestSeller</a>
                        </li>
                        <li class="nav-item">
                            <a href="../discount/index.php" class="nav-link">Discount</a>
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
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-5">
                    <li class="nav-item d-flex" id="not_login">
                        <a class="nav-link pr-1" href="../login">
                            <i class="fa fa-user"></i>
                            Login
                        </a>
                        <a class="nav-link pl-1 pr-1">
                            |
                        </a>
                        <a class="nav-link pl-1" href="../register">
                            Register
                        </a>
                    </li>
                    <!-- Login Dropdowm Menu -->
                    <li class="nav-item dropdown" id="is_login">
                        <a class="nav-link" data-toggle="dropdown" id="d_name" href="#">
                            <i class="fa fa-user"></i>
                            Peearpar
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item bg-dark">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-sm" id="d_email">phusit_sawat@hotmail.com</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-sm" id="d_credit">credit: 0</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item" id="logout">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-sm">Log out</p>
                                    </div>
                                </div>
                            </a>
                        </div>
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
                        <h1 class="m-0">BestSeller</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container">
                <div class="row mb-2 justify-content-around">
                    <div class="card mt-4" style="width: 14rem;">
                        <div class="ribbon-wrapper ribbon-lg">
                            <div class="ribbon bg-warning">
                                Best Seller
                            </div>
                        </div>
                        <img src="../images/VitaminC.jpeg" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-text">฿2,500</p>
                            <p class="card-text">BOBBI BROWN Vitamin Enriched Face Base 50 ml.</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-block btn-outline-dark">Buy</button>
                        </div>
                    </div>
                    <div class="card mt-4" style="width: 14rem;">
                        <div class="ribbon-wrapper ribbon-lg">
                            <div class="ribbon bg-warning">
                                Best Seller
                            </div>
                        </div>
                        <img src="../images/HydratingWaterFreshCream.jpeg" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-text">฿2,400</p>
                            <p class="card-text">BOBBI BROWN Hydrating Water Fresh Cream 50 ml.</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-block btn-outline-dark">Buy</button>
                        </div>
                    </div>
                    <div class="card mt-4" style="width: 14rem;">
                        <div class="ribbon-wrapper ribbon-lg">
                            <div class="ribbon bg-warning">
                                Best Seller
                            </div>
                        </div>
                        <img src="../images/EXTRA REPAIR SERUM.webp" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-text">฿4,500</p>
                            <p class="card-text">BOBBI BROWN EXTRA REPAIR SERUM 100 ml.</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-block btn-outline-dark">Buy</button>
                        </div>
                    </div>
                    <div class="card mt-4" style="width: 14rem;">
                        <div class="ribbon-wrapper ribbon-lg">
                            <div class="ribbon bg-warning">
                                Best Seller
                            </div>
                        </div>
                        <img src="../images/Soothing Cleansing Oil.webp" class="card-img-top" alt="">
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
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../admin/dist/js/adminlte.min.js"></script>

    <script>
        $(function() {
            window.onscroll = function() { ////// ให้ nav bar เลื่อนตามลงมา
                myFunction()
            };
            if (getCookie('token')) { ////เชคว่าถ้ามี token ให้ทำอะไรต่อ
                $('#not_login').remove(); //// สั่งให้ remove not_login
                $('#d_name').html('<i class="fa fa-user"></i> ' + getCookie('name'));
                $('#d_email').html(getCookie('email'));
                $('#d_credit').html('credit: ' + numberFormat(getCookie('credit')) + " Baht");
            } else {
                $('#is_login').remove(); ///// ถ้าไม่มี token ให้ลบ is_login แทน
            }
            $('#logout').click(() => {  ////ถ้าเกิดการคลิก Selecter ตัว logout ให้ทำการลบคุกกี้ทิ้ง แล้ว reload หน้่าใหม่ (Jquery)
                deleteCookie('token', '/');
                deleteCookie('name', '/');
                deleteCookie('email', '/');
                deleteCookie('credit', '/');

                location.reload();
            });
        });

        /////function fix nav bar ให้ตามลงมาด้านล่างเสมอ
        function myFunction() {
            var nav = document.getElementsByClassName('main-header')[0];
            var contentHeader = document.getElementsByClassName('content-header')[0];
            var fixed = contentHeader.offsetTop + contentHeader.offsetHeight;

            if (window.pageYOffset >= fixed) {
                console.log(fixed);
                nav.classList.add("fixed-top")
            } else {
                nav.classList.remove("fixed-top");
            }
        }

        ///// ทำการเชคcookie ก่อน ว่ามีมั้ย และลบทิ้ง
        function deleteCookie(name, path, domain) {
            if (getCookie(name)) {
                document.cookie = name + "=" +
                    ((path) ? ";path=" + path : "") +
                    ((domain) ? ";domain=" + domain : "") +
                    ";expires=Thu, 01 Jan 1970 00:00:01 GMT";
            }
        }

        function getCookie(name) {   /////เป็นfunction ที่หั่น cookie เป็น key และ value แล้วค่อยแบ่ง value ออกมาตาม key อีกที
            const cookieValue = document.cookie
                .split('; ')
                .find((row) => row.startsWith(name + '='))
                ?.split('=')[1];

            return cookieValue
        }

        ////// ใส่ comma ให้ตัวเลข
        function numberFormat(num) {
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
    </script>
</body>

</html>