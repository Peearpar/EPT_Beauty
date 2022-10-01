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
                        <li class="nav-item active">
                            <a href="index.php" class="nav-link">NewProduct</a>
                        </li>
                        <li class="nav-item">
                            <a href="../bestseller/index.php" class="nav-link">BestSeller</a>
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
                    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-5" id="is_login">
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
                            <a class="nav-link" id="cart" href="../cart/index.php">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span class="badge badge-danger navbar-badge cart-count">3</span>
                            </a>
                        </li>
                    </ul>
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
                <div class="row mb-2 justify-content-center" id="card-items">
                    <!-- <div class="card mt-4" style="width: 14rem;">
                        <div class="ribbon-wrapper ribbon-lg">
                            <div class="ribbon  bg-primary">
                                New
                            </div>
                        </div>
                        <img src="../images/VitaminC.jpeg" class="card-img-top" alt="">
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
                            <div class="ribbon  bg-primary">
                                New
                            </div>
                        </div>
                        <img src="../images/HydratingWaterFreshCream.jpeg" class="card-img-top" alt="">
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
                            <div class="ribbon  bg-primary">
                                New
                            </div>
                        </div>
                        <img src="../images/EXTRA REPAIR SERUM.webp" class="card-img-top" alt="">
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
                            <div class="ribbon  bg-primary">
                                New
                            </div>
                        </div>
                        <img src="../images/Soothing Cleansing Oil.webp" class="card-img-top" alt="">
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
            loadProduct();
            loadCart();
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
            logout();
        });

        // /////function fix nav bar ให้ตามลงมาด้านล่างเสมอ
        // function myFunction() {
        //     var nav = document.getElementsByClassName('main-header')[0];
        //     var contentHeader = document.getElementsByClassName('content-header')[0];
        //     var fixed = contentHeader.offsetTop + contentHeader.offsetHeight;

        //     if (window.pageYOffset >= fixed) {
        //         // console.log(fixed);
        //         nav.classList.add("fixed-top")
        //     } else {
        //         nav.classList.remove("fixed-top");
        //     }
        // }

        // ///// ทำการเชคcookie ก่อน ว่ามีมั้ย และลบทิ้ง
        // function deleteCookie(name, path, domain) {
        //     if (getCookie(name)) {
        //         document.cookie = name + "=" +
        //             ((path) ? ";path=" + path : "") +
        //             ((domain) ? ";domain=" + domain : "") +
        //             ";expires=Thu, 01 Jan 1970 00:00:01 GMT";
        //     }
        // }

        // function getCookie(name) { /////เป็นfunction ที่หั่น cookie เป็น key และ value แล้วค่อยแบ่ง value ออกมาตาม key อีกที
        //     const cookieValue = document.cookie
        //         .split('; ')
        //         .find((row) => row.startsWith(name + '='))
        //         ?.split('=')[1];

        //     return cookieValue
        // }

        //////load ข้อมูล ptoduct ทั้งหมดมาก่อน
        async function loadProduct() {
            await $.get("/EPT_Beauty/back_end/products_api/get_products.php")
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
                        const is_new = new Date(value.created_at).getYear() === new Date().getYear();
                        if (value.is_active === 1 && is_new && value.stock > 0) {
                            let real_price = (100 - value.discount) * 0.01 * value.price;
                            let tmp = `
                            <div class="card mt-4" style="width: 14rem;">
                                <div class="ribbon-wrapper ribbon-lg">
                                    <div class="ribbon  bg-primary">
                                        New
                                    </div>
                                </div>
                                <img src="${value.path_img}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <p class="card-text-price">฿${numberFormat(real_price)}</p>
                                    <p class="card-text-name">${value.name}</p>
                                    <p class="card-description">${value.description}</p>
                                </div>
                                <div class="card-footer">
                                    <button class="buy-btn btn btn-block btn-outline-dark" product-id=${value.id}>Buy</button>
                                </div>
                            </div>
                            `;
                            if (value.discount > 0) {
                                tmp = `
                                <div class="card mt-4" style="width: 14rem;">
                                    <div class="ribbon-wrapper ribbon-lg">
                                        <div class="ribbon bg-danger">
                                            Discount
                                        </div>
                                    </div>
                                    <img class="card-img-top" src="${value.path_img}" alt="">
                                    <div class="card-body">
                                        <p class="card-text-price">฿${numberFormat(real_price)}</p>
                                        <p class="text-danger"><s>฿${numberFormat(value.price)}</s><sup class="save_discount">save</sup>${value.discount}%</p>
                                        <p class="card-text-name">${value.name}</p>
                                        <p class="card-description">${value.description}</p>
                                    </div>
                                    <div class="card-footer">
                                        <button class="buy-btn btn btn-block btn-outline-dark" product-id='${value.id}'>Buy</button>
                                    </div>
                                </div>
                            `;
                            }
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
                    // console.log(data.is_complete);

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