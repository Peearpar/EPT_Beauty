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
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i>
          </a>
          <div class="dropdown-menu dropdown-menu dropdown-menu-right">
            <a href="#" class="dropdown-item">
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
              <a href="../../users" class="nav-link">

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
              <a href="../" class="nav-link active">
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
              <h1 class="m-0">Edit Users</h1>
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
                  <h3 class="card-title">User id</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name">
                      </div>
                      <div class="form-group">
                        <label for="surname">Surname</label>
                        <input type="text" class="form-control" id="surname">
                      </div>
                      <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" id="phone">
                      </div>
                      <div class="form-group">
                        <label for="district">District</label>
                        <input type="text" class="form-control" id="district">
                      </div>
                      <div class="form-group">
                        <label for="sub-district">Sub-District</label>
                        <input type="text" class="form-control" id="sub-district">
                      </div>
                      <div class="form-group">
                        <label for="zip_code">Zip_Code</label>
                        <input type="number" class="form-control" id="zip_code">
                      </div>
                      <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address">
                      </div>
                      <div class="form-group">
                        <label for="credit">Credit</label>
                        <input type="number" class="form-control" id="credit">
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer d-flex justify-content-center">
                    <a id="edit" type="submit" class="btn btn-primary w-100 mr-2">Edit</a>
                    <a href="../" class="btn btn-secondary w-100 ml-2">Cancel</a>
                  </div>
                </form>
              </div>
              <!-- /.card -->
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

    <script>
      $(function() {
        var Toast = Swal.mixin({
          showConfirmButton: false,
          timer: 2000
        });
        $('#edit').click(function() {
          Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Edit it!'
          }).then((result) => {
            if (result.isConfirmed) {
              Toast.fire(
                'edit!',
                'Your file has been edited.',
                'success'
              ).then(() => {
                window.location.href = "../"
              })
            }
          })
        });
      });
    </script>
</body>

</html>