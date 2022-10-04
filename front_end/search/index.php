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
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
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
                <a href="#" class="navbar-brand">
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
                            <a href="../bestseller/index.php" class="nav-link">BestSeller</a>
                        </li>
                        <li class="nav-item">
                            <a href="../discount/index.php" class="nav-link">Discount</a>
                        </li>
                    </ul>

                    <!-- SEARCH FORM -->
                    <!-- <form class="form-inline ml-0 ml-md-3 w-100" id="search-form">
                        <div class="w-100 input-group input-group-sm">
                            <input class="form-control form-control-navbar" id="search_text" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->
                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-5" id="not_login">

                    <!-- Navbar Search -->
                    <li class="nav-item">
                        <a class="nav-link" data-widget="navbar-search" data-target="#navbar-search1" href="#" role="button">
                            <i class="fas fa-search"></i>
                        </a>
                        <div class="navbar-search-block" id="navbar-search1">
                            <form class="form-inline" id="search-form">
                                <div class="input-group input-group-sm">
                                    <input class="form-control form-control-navbar" id="search_text" type="search" placeholder="Search" aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-navbar" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <li class="nav-item d-flex">
                        <a class="nav-link pr-1" href="login">
                            <i class="fa fa-user"></i>
                            Login
                        </a>
                        <a class="nav-link pl-1 pr-1">
                            |
                        </a>
                        <a class="nav-link pl-1" href="register">
                            Register
                        </a>
                    </li>
                </ul>

                <!-- Login Dropdowm Menu -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-5" id="is_login">

                    <!-- Navbar Search -->
                    <li class="nav-item">
                        <a class="nav-link" data-widget="navbar-search" data-target="#navbar-search1" href="#" role="button">
                            <i class="fas fa-search"></i>
                        </a>
                        <div class="navbar-search-block" id="navbar-search1">
                            <form class="form-inline" id="search-form">
                                <div class="input-group input-group-sm">
                                    <input class="form-control form-control-navbar" id="search_text" type="search" placeholder="Search" aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-navbar" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
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
                    <li class="nav-item">
                        <a class="nav-link" id="cart" href="/EPT_Beauty/front_end/cart/">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span class="badge badge-danger navbar-badge cart-count">3</span>
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
                    <div class="col-sm-2">
                        <h1 class="m-0">Search</h1>
                    </div>
                    <div class="col-sm-2 mt-auto">
                        <h5 class="m-auto">results = <span id="search-count">0</span></h5>
                    </div>
                    <div class="col-sm-2 mt-auto">
                        <h5 class="m-auto">Search for <span><b id="search-text-tmp">xxx</b></span></h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container">
                <div class="row mb-2 justify-content-center" id="card-items">
                </div>
                <div class="row mt-5 justify-content-end">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <!-- <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li> -->
                        </ul>
                    </nav>
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
    <!-- MyJs -->
    <script src="../js/script.js"></script>
    <!-- sweetalert2 -->
    <script src="../sweetalert2/sweetalert2@11.js"></script>

    <script>
        $(function() {
            searchSubmitEvent(1, 4);
            getSearchProduct(getParam().search_text, getParam().page, getParam().pageSize);

            // loadProduct(4);
            loadCart();
            window.onscroll = function() { ////// ให้ nav bar เลื่อนตามลงมา
                myFunction()
            };
            if (getCookie('token')) { ////เชคว่าถ้ามี token ให้ทำอะไรต่อ
                $('#not_login').remove(); //// สั่งให้ remove not_login
                $('#d_name').html('<i class="fa fa-user"></i> ' + "<span id='username'>" + getCookie('name') + "</span>");
                $('#d_email').html(getCookie('email'));
                $('#d_credit').html('credit: ' + numberFormat(getCookie('credit')) + " Baht");
            } else {
                $('#is_login').remove(); ///// ถ้าไม่มี token ให้ลบ is_login แทน
            }
            logout();
        });

        function loadCart() {
            if (getCookie('email')) {
                $.post("/EPT_Beauty/back_end/cart_api/get_carts_by_user.php", {
                    user_email: getCookie('email')
                }).done(function(data) {
                    if (!data.is_complete) {
                        let status = 'error';
                        let message = data.message;

                        Toast.fire(
                            'Error!',
                            message,
                            status
                        ).then(() => {
                            window.location.href = "../";
                        })
                    }
                    $('.cart-count').text(data.data.length);

                }).fail(function(data) {
                    console.log(data);
                });
            }
        }

        function getParam() {
            const params = new Proxy(new URLSearchParams(window.location.search), {
                get: (searchParams, prop) => searchParams.get(prop),
            });

            return params;
        }
    </script>
</body>

</html>