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
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
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
                        <li class="nav-item active">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="new_product/index.php" class="nav-link">NewProduct</a>
                        </li>
                        <li class="nav-item">
                            <a href="bestseller/index.php" class="nav-link">BestSeller</a>
                        </li>
                        <li class="nav-item">
                            <a href="discount/index.php" class="nav-link">Discount</a>
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
                    <div class="col-sm-6">
                        <h1 class="m-0">Home</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container">
                <div class="row mb-2 justify-content-center">
                    <div id="carouselExampleIndicators" class="carousel slide col-10 mt-2" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="images/slide4.webp" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/slide5.webp" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/slide6.jpeg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Recommend BestSeller of the month Contains page -->
            <div class="container-fluid bg-dark mt-5">
                <div class="container">
                    <div class="row mb-3">
                        <div class="col-12">
                            <h3 class="m-2">Best Seller of The Month</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mb-2 justify-content-center" id="card-items">
                    <!-- <div class="card mt-4" style="width: 14rem;">
                        <div class="ribbon-wrapper ribbon-lg">
                            <div class="ribbon  bg-secondary">
                                Best Seller
                            </div>
                        </div>
                        <img src="images/VitaminC.jpeg" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-text">฿2,500</p>
                            <p class="card-text">BOBBI BROWN</p>
                            <p>Vitamin Enriched Face Base 50 ml.</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-block btn-outline-dark">Buy</button>
                        </div>
                    </div>
                    <div class="card mt-4" style="width: 14rem;">
                        <div class="ribbon-wrapper ribbon-lg">
                            <div class="ribbon  bg-secondary">
                                Best Seller
                            </div>
                        </div>
                        <img src="images/HydratingWaterFreshCream.jpeg" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-text">฿2,400</p>
                            <p class="card-text">BOBBI BROWN</p>
                            <p>Hydrating Water Fresh Cream 50 ml.</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-block btn-outline-dark">Buy</button>
                        </div>
                    </div>
                    <div class="card mt-4" style="width: 14rem;">
                        <div class="ribbon-wrapper ribbon-lg">
                            <div class="ribbon  bg-secondary">
                                Best Seller
                            </div>
                        </div>
                        <img src="images/EXTRA REPAIR SERUM.webp" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-text">฿4,500</p>
                            <p class="card-text">BOBBI BROWN</p>
                            <p>EXTRA REPAIR SERUM 100 ml.</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-block btn-outline-dark">Buy</button>
                        </div>
                    </div>
                    <div class="card mt-4" style="width: 14rem;">
                        <div class="ribbon-wrapper ribbon-lg">
                            <div class="ribbon  bg-secondary">
                                Best Seller
                            </div>
                        </div>
                        <img src="images/Soothing Cleansing Oil.webp" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-text">฿2,150</p>
                            <p class="card-text">BOBBI BROWN</p>
                            <p>Soothing Cleansing Oil 200 ml.</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-block btn-outline-dark">Buy</button>
                        </div>
                    </div> -->
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
    <script src="admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="admin/dist/js/adminlte.min.js"></script>
    <!-- MyJs -->
    <script src="js/script.js"></script>
    <!-- sweetalert2 -->
    <script src="sweetalert2/sweetalert2@11.js"></script>

    <script>
        $(function() {
            loadProduct(4);
            loadCart();
            searchSubmitEvent(1, 4);
            window.onscroll = function() { ////// ให้ nav bar เลื่อนตามลงมา
                myFunction()
            };
            if (getCookie('token')) { /// /เชคว่าถ้ามี token ให้ทำอะไรต่อ
                $('#not_login').remove(); //// สั่งให้ remove not_login
                $('#d_name').html('<i class="fa fa-user"></i> ' + "<span id='username'>" + getCookie('name') + "</span>");
                $('#d_email').html(getCookie('email'));
                $('#d_credit').html('credit: ' + numberFormat(getCookie('credit')) + " Baht");
            } else {
                $('#is_login').remove(); ///// ถ้าไม่มี token ให้ลบ is_login แทน
            }
            logout();
        });

        //////load ข้อมูล ptoduct ทั้งหมดมาก่อน
        async function loadProduct(limit) {
            await $.get("/EPT_Beauty/back_end/products_api/get_best_seller_of_the_month_products.php?limit=" + limit)
                .done(function(data) {
                    console.log(data.is_complete);

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

                    data.data.map((value) => {
                        if (value.is_active === 1 && value.stock > 0) {
                            let real_price = (100 - value.discount) * 0.01 * value.price;
                            let tmp = `
                            <div class="card mt-4" style="width: 14rem;">
                                <div class="ribbon-wrapper ribbon-lg">
                                    ${value.discount > 0 ?
                                    `<div class="ribbon bg-danger">
                                        Discount
                                    </div>` :
                                    `<div class="ribbon bg-secondary">
                                        Best Seller
                                    </div>`}

                                </div>
                                <img src="${value.path_img}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <p class="card-text-price">฿${numberFormat(real_price)}</p>
                                    <p class="card-text-name">${value.name}</p>
                                    <p class="card-description">${value.description}</p>
                                </div>
                                <div class="card-footer">
                                    <button class="buy-btn btn btn-block btn-outline-dark" product-id='${value.id}'>Buy</button>
                                </div>
                            </div>
                            `;
                            $('#card-items').append(tmp);
                        }
                    });

                }).fail(function(data) {
                    console.log(data);
                });
            buyClickEvent();
        }

        function buyClickEvent() {
            $('.buy-btn').click(function(index) {
                // console.log($(this).attr('product-id'));
                $.post("/EPT_Beauty/back_end/cart_api/add_cart.php", {
                    user_email: getCookie('email'),
                    product_id: $(this).attr('product-id')
                }).done(function(data) {
                    var Toast2 = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 1000
                    });

                    if (data.is_complete) {
                        Toast2.fire({
                            icon: 'success',
                            title: 'add product on cart'
                        })
                    }

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
                    loadCart();

                }).fail(function(data) {
                    alertlogin();
                });
            });
        }

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
    </script>



</body>

</html>