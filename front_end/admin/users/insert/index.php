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
          <a class="nav-link" data-toggle="dropdown" href="#" id="user">
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
              <a href="../" class="nav-link">
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
              <a href="../../users" class="nav-link active">
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
              <h1 class="m-0">New User</h1>
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
                  <h3 class="card-title">New User</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="needs-validation" method="post">
                  <div class="card-body">
                    <div class="form-group">
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" required>
                      </div>
                      <div class="form-group">
                        <label for="surname">Surname</label>
                        <input type="text" class="form-control" id="surname" required>
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" required>
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" required>
                      </div>
                      <div class="form-group">
                        <label for="district">District</label>
                        <input type="text" class="form-control" id="district" required>
                      </div>
                      <div class="form-group">
                        <label for="sub-district">Sub-District</label>
                        <input type="text" class="form-control" id="sub-district" required>
                      </div>
                      <div class="form-group">
                        <label for="zip_code">Zip_Code</label>
                        <input type="number" class="form-control" id="zip_code" required>
                      </div>
                      <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" required>
                      </div>
                      <div class="form-group">
                        <label for="credit">Credit</label>
                        <input type="number" class="form-control" id="credit" required>
                      </div>
                      <div class="form-group">
                        <label>Role</label>
                        <select class="custom-select" id="role">
                          <option>admin</option>
                          <option>customer</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer d-flex justify-content-center">
                    <button id="save" type="submit" class="btn btn-primary w-100 mr-2">Save</button>
                    <a href="../" class="btn btn-secondary w-100 ml-2">Cancel</a>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->


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
      $('#user').html(`<i class="far fa-user"></i> ${getCookie('name')}`);
      $("form").submit(function(e) {
        e.preventDefault();
        const name = $('#name').val();
        const surname = $('#surname').val();
        const address = $('#address').val();
        const district = $('#district').val();
        const subdistrict = $('#sub-district').val();
        const zip_code = $('#zip_code').val();
        const email = $('#email').val();
        const password = $('#password').val();
        const credit = $('#credit').val();
        const role = $('#role').find(":selected").text();

        $.post("../../../../back_end/register_api/register_admin.php", {
          name: name,
          surname: surname,
          address: address,
          district: district,
          sub_district: subdistrict,
          zip_code: zip_code,
          email: email,
          password: password,
          credit: credit,
          role: role,
        }).done(function(data) {
          console.log(data.is_complete);

          let status = 'success';
          let message = data.message;

          if (!data.is_complete) {
            status = 'error';

            if (!$('#email').hasClass('is-invalid')) {
              $('#email').addClass('is-invalid');
            }
          } else {
            if (!$('#email').hasClass('is-invalid')) {
              $('#email').removeClass('is-invalid');
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
            window.location.href = "../"
          })
        }).fail(function(data) {
          console.log(data);
        });
      });

      logout();
    });
  </script>
</body>

</html>