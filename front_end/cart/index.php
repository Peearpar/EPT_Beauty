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
    <!-- My cart style -->
    <link rel="stylesheet" href="css/cart-style.css">
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
                            <a class="nav-link" id="cart" href="#">
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
                        <h1 class="m-0">SHOPPING CART</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container">
                <div class="content d-flex justify-content-center pt-2 pb-5">
                    <div class="cart_list d-flex flex-column align-self-center">
                        <!-- <div class="d-flex cart bg-white mr-5 mt-3 p-3">
                            <div class="cart_img align-self-center d-flex justify-content-center">
                                <img src="../images/VitaminC.jpeg" alt="productimages" class="mr-3">
                            </div>

                            <div class="mr-5 align-self-center product-text">
                                <p>BOBBI BROWN</p>
                                <p>Vitamin Enriched Face Base 50 ml.</p>
                            </div>
                            <div class="mr-5 d-flex flex-column align-self-center btn-tools">
                                <button type="button" class="btn btn-success mb-3 d-none">Confirm</button>
                                <div class="btn-group w-50 mb-3">
                                    <button type="button" class="btn btn-dark minus">-</button>
                                    <div class="product-count form-control">1</div>
                                    <button type="button" class="btn btn-dark plus">+</button>
                                </div>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                            <h6 class="mr-5 price align-self-center price-1">฿2,500</h6>
                            <h3 class="price_sum align-self-center">฿2,500</h3>
                        </div>
                        <div class="d-flex cart bg-white mr-5 mt-3 p-3">
                            <div class="cart_img align-self-center d-flex justify-content-center">
                                <img src="../images/VitaminC.jpeg" alt="productimages" class="mr-3">
                            </div>

                            <div class="mr-5 align-self-center product-text">
                                <p>BOBBI BROWN</p>
                                <p>Vitamin Enriched Face Base 50 ml.</p>
                            </div>

                            <div class="mr-5 d-flex flex-column align-self-center btn-tools">
                                <button type="button" class="btn btn-success mb-3 d-none">Confirm</button>
                                <div class="btn-group w-50 mb-3">
                                    <button type="button" class="btn btn-dark minus">-</button>
                                    <div class="product-count form-control">1</div>
                                    <button type="button" class="btn btn-dark plus">+</button>
                                </div>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                            <h6 class="mr-5 price align-self-center price-1">฿2,500</h6>
                            <h3 class="price_sum align-self-center">฿2,500</h3>
                        </div>
                        <div class="d-flex cart bg-white mr-5 mt-3 p-3">
                            <div class="cart_img align-self-center d-flex justify-content-center">
                                <img src="../images/VitaminC.jpeg" alt="productimages" class="mr-3">
                            </div>

                            <div class="mr-5 align-self-center product-text">
                                <p>BOBBI BROWN</p>
                                <p>Vitamin Enriched Face Base 50 ml.</p>
                            </div>

                            <div class="mr-5 d-flex flex-column align-self-center btn-tools">
                                <button type="button" class="btn btn-success mb-3 d-none">Confirm</button>
                                <div class="btn-group w-50 mb-3">
                                    <button type="button" class="btn btn-dark minus">-</button>
                                    <div class="product-count form-control">1</div>
                                    <button type="button" class="btn btn-dark plus">+</button>
                                </div>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                            <h6 class="mr-5 price align-self-center price-1">฿2,500</h6>
                            <h3 class="price_sum align-self-center">฿2,500</h3>
                        </div>
                        <div class="d-flex cart bg-white mr-5 mt-3 p-3">
                            <div class="cart_img align-self-center d-flex justify-content-center">
                                <img src="../images/VitaminC.jpeg" alt="productimages" class="mr-3">
                            </div>

                            <div class="mr-5 align-self-center product-text">
                                <p>BOBBI BROWN</p>
                                <p>Vitamin Enriched Face Base 50 ml.</p>
                            </div>

                            <div class="mr-5 d-flex flex-column align-self-center btn-tools">
                                <button type="button" class="btn btn-success mb-3 d-none">Confirm</button>
                                <div class="btn-group w-50 mb-3">
                                    <button type="button" class="btn btn-dark minus">-</button>
                                    <div class="product-count form-control">1</div>
                                    <button type="button" class="btn btn-dark plus">+</button>
                                </div>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                            <h6 class="mr-5 price align-self-center price-1">฿2,500</h6>
                            <h3 class="price_sum align-self-center">฿2,500</h3>
                        </div> -->
                    </div>

                    <!-- Checkout Box -->
                    <div class="mt-5 total-content">
                        <div class="total bg-dark d-flex flex-column">
                            <div class="d-flex justify-content-between mt-3">
                                <p>Items</p>
                                <p id="count-item">4</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>Total</p>
                                <p id="amount">฿2,500</p>
                            </div>
                            <button type="button" class="btn btn-danger">CHECKOUT</button>
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

    <script src="../js/script.js"></script>

    <script>
        $(function() {
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
            $('#logout').click(() => { ////ถ้าเกิดการคลิก Selecter ตัว logout ให้ทำการลบคุกกี้ทิ้ง แล้ว ให้กลับไปหน้า Home (Jquery)
                deleteCookie('token', '/');
                deleteCookie('name', '/');
                deleteCookie('email', '/');
                deleteCookie('credit', '/');

                window.location.href = "../";
            });
        });

        async function loadCart() {
            if (getCookie('email')) {
                await $.post("/EPT_Beauty/back_end/cart_api/get_carts_by_user.php", {
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

                    if(data.data.length === 0) {
                        let tmp = `<div class="empty-cart d-flex flex-column text-center mr-5 mt-5 p-5">
                                        <p>Your shopping cart is currently empty.</p>
                                        <a href="../" class="btn btn-primary btn-home text-white align-self-center mt-4">Go to shopping</a>
                                    </div>`;

                        $('.cart_list').append(tmp);
                    }

                    data.data.map((value) => {
                        let real_price = (100 - value.discount) * 0.01 * value.price;
                        let tmp = `
                            <div class="d-flex cart bg-white mr-5 mt-3 p-3">
                                <div class="cart_img align-self-center d-flex justify-content-center ${value.stock <= 0  || !value.is_active ? 'disabledDiv' : ''}">
                                    <img src="${value.path_img}" alt="productimages" class="mr-3">
                                </div>

                                <div class="mr-5 align-self-center product-text ${value.stock <= 0  || !value.is_active ? 'disabledDiv' : ''}">
                                    <p class="card-text-name">${value.prod_name}</p>
                                    <p>${value.description}</p>
                                    ${value.stock <= 0 || !value.is_active ? '<p class="text-danger">Sold Out</p>' : ''}
                                </div>

                                <div class="mr-5 d-flex flex-column align-self-center btn-tools">
                                    <button type="button" class="btn btn-success mb-3 d-none" cart-id="${value.id}">Confirm</button>
                                    <div class="btn-group w-50 mb-3 ${value.stock <= 0  || !value.is_active ? 'disabledDiv' : ''}">
                                        <button type="button" class="btn btn-dark minus ${value.stock <= 0  || !value.is_active ? 'disabledEvent' : ''}">-</button>
                                        <div class="product-count form-control">${value.qty}</div>
                                        <button type="button" class="btn btn-dark plus ${value.stock <= 0  || !value.is_active ? 'disabledEvent' : ''}">+</button>
                                    </div>
                                    <button type="button" class="btn btn-danger" cart-id="${value.id}">Delete</button>
                                </div>
                                <div class="d-flex flex-column align-self-center price-contain ${value.stock <= 0  || !value.is_active ? 'disabledDiv' : ''}">
                                    ${value.discount > 0 ? `
                                    <h6 class="mr-5 price align-self-center price-1">฿${numberFormat(real_price)}</p>
                                    <h6 class="text-danger mr-5 price align-self-center"><s>฿${numberFormat(value.price)}</s></p>` :
                                    `<h6 class="mr-5 price align-self-center price-1">฿${numberFormat(value.price)}</h6>`}

                                </div>
                                <h3 class="price_sum align-self-center ${value.stock <= 0 ? 'disabledDiv' : ''}">฿${numberFormat(real_price * value.qty)}</h3>
                            </div>
                        `;
                        $('.cart_list').append(tmp);
                    });


                }).fail(function(data) {
                    console.log(data);
                });

                triggerClickEvent();
                setInitPriceAndItem();
            }
        }

        function triggerClickEvent() {
            $(".minus").click(function(index) {
                let temp = parseInt($(this).parent().children('div').text()) - 1;
                if (temp > 0) {
                    $(this).parent().children('div').html(temp);
                    let price = $(this).parent().parent().parent().children('.price-contain').children('.price-1').text();
                    price = toNumber(price);
                    let priceSum = $(this).parent().parent().parent().children('.price_sum');
                    priceSum.html('฿' + numberFormat(price * temp));

                    let btnConfirm = $(this).parent().parent().children('.btn-success')
                    if (btnConfirm.hasClass('d-none')) {
                        btnConfirm.removeClass('d-none');
                        btnConfirm.addClass('d-block');
                    }
                }
                setInitPriceAndItem();
            });

            $(".plus").click(function(index) {
                let temp = parseInt($(this).parent().children('div').text()) + 1;
                $(this).parent().children('div').html(temp);
                let price = $(this).parent().parent().parent().children('.price-contain').children('.price-1').text();
                price = toNumber(price);
                let priceSum = $(this).parent().parent().parent().children('.price_sum');
                priceSum.html('฿' + numberFormat(price * temp));

                let btnConfirm = $(this).parent().parent().children('.btn-success')
                if (btnConfirm.hasClass('d-none')) {
                    btnConfirm.removeClass('d-none');
                    btnConfirm.addClass('d-block');
                }
                setInitPriceAndItem();
            });

            $('.btn-success').click(function(index) {
                let btnConfirm = $(this);
                if (btnConfirm.hasClass('d-block')) {
                    btnConfirm.removeClass('d-block');
                    btnConfirm.addClass('d-none');
                }
            });
        }
    </script>



</body>

</html>