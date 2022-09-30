<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EPT_Beauty</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../../fontawesome/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- My css -->
  <link rel="stylesheet" href="../../css/style.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Dashboard</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Accounts Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" id='user'>
            <i class="far fa-user"></i>
            Admin
          </a>
          <div class="dropdown-menu dropdown-menu dropdown-menu-right">
            <a href="#" class="dropdown-item" id="logout">
              <i class="fa-solid fa-arrow-right-from-bracket mr-2"></i>
              Log out
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">Dashboard</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="../" class="nav-link active">
                <i class="fa-solid fa-box-archive"></i>
                <p>
                  Products
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="../../categories/" class="nav-link">
                <i class="fa-brands fa-buffer"></i>
                <p>
                  Categories
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="../../orders" class="nav-link">
                <i class="fa-solid fa-cart-arrow-down"></i>
                <p>
                  Orders
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="../../users" class="nav-link">
                <i class="fa-solid fa-users"></i>
                <p>
                  Users
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">New Product</h1>
            </div>
          </div>
        </div>
      </div>

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">New Product</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <img id="preview-img" class="w-10" src="/EPT_Beauty/front_end/images/defualt_image.png" alt="upload">
                    <div class="form-group">
                      <label for="img">File input</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <label class="custom-file-label" for="img">Choose file</label>
                          <input type="file" class="custom-file-input" id="img" required>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                    <!-- select -->
                    <div class="form-group">
                      <label>Category</label>
                      <select class="custom-select" id="category">
                        <!-- <option>Value 1</option>
                        <option>Value 2</option>
                        <option>Value 3</option> -->
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <input type="text" class="form-control" id="description" required>
                    </div>
                    <div class="form-group">
                      <label for="price">Price</label>
                      <input type="number" class="form-control" id="price" value="0" required>
                    </div>
                    <div class="form-group">
                      <label for="discount">Discount</label>
                      <input type="number" class="form-control" id="discount" value="0" min="0" required>
                    </div>
                    <div class="form-group">
                      <label for="stock">Stock</label>
                      <input type="number" class="form-control" id="stock" value="0" min="0" required>
                    </div>
                  </div>

                  <!-- /.card-body -->

                  <div class="card-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary w-100 mr-2">Save</button>
                    <a href="../" class="btn btn-secondary w-100 ml-2">Cancel</a>
                  </div>
                </form>
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


  </div>

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="../../../sweetalert2/sweetalert2@11.js"></script>
  <!-- AdminLTE -->
  <script src="../../dist/js/adminlte.js"></script>
  <!-- MY JS -->
  <script src="../../../js/script.js"></script>

  <script>
    $(function() {
      validateAdminPermission(getCookie('email'), getCookie('token'));
      loadCatgerory();
      $('#user').html(`<i class="far fa-user"></i> ${getCookie('name')}`);

      $("form").submit(function(e) {
        e.preventDefault();
        const category_id = $('#category').find(":selected").val();
        const name = $('#name').val();
        const price = $('#price').val();
        const discount = $('#discount').val();
        const stock = $('#stock').val();
        const description = $('#description').val();

        let formData = new FormData();
        let files = $('#img')[0].files[0];
        formData.append('path_img', files);
        formData.append('category_id', category_id);
        formData.append('name', name);
        formData.append('description', description);
        formData.append('price', price);
        formData.append('discount', discount);
        formData.append('stock', stock);
        formData.append('user_email', getCookie('email'));

        $.ajax({
          url: '/EPT_Beauty/back_end/products_api/insert_product.php',
          type: 'post',
          data: formData,
          contentType: false,
          processData: false,
          success: function(data) {
            console.log(data.is_complete);

            let status = 'success';
            let message = data.message;

            if (!data.is_complete) {
              status = 'error';

              if (!$('#name').hasClass('is-invalid')) {
                $('#name').addClass('is-invalid');
              }
            } else {
              if (!$('#name').hasClass('is-invalid')) {
                $('#name').removeClass('is-invalid');
              }
            }
            var Toast = Swal.mixin({
              showConfirmButton: false,
              timer: 2000,
              icon: status,
            });

            Toast.fire(
              message,
            ).then(() => {
              if (data.is_complete) {
                window.location.href = "../";
              }

            })
          },
          error: function(data) {
            console.log(data);
          }
        })

      });

      logout();

      ////show img and file name img
      $('input[type="file"]').change(function(e) {
        let fileName = e.target.files[0].name;
        $(this).prev('label').text(fileName);
        let [file] = $(this).prop('files');
        if (file) {
          $('#preview-img').attr('src', URL.createObjectURL(file));
        }
      });

    });

    function loadCatgerory() {

      $.get("/EPT_Beauty/back_end/category_api/get_categories.php")
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
            $('#category').append(`<option value='${value.id}'>${value.name}</option>`);
          });

        }).fail(function(data) {
          console.log(data);
        });

    }
  </script>
</body>

</html>