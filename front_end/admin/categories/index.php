<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EPT_Beauty</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../fontawesome/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- My css -->
  <link rel="stylesheet" href="../css/style.css">
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
          <a href="../" class="nav-link">Dashboard</a>
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
      <a href="../" class="brand-link">
        <span class="brand-text font-weight-light">Dashboard</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="../product" class="nav-link">
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
              <a href="#" class="nav-link active">
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
              <a href="../orders" class="nav-link">
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
              <a href="../users" class="nav-link">
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
              <h1 class="m-0">Categories</h1>
            </div>
          </div>
        </div>
      </div>

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3 id="category-count">53</h3>

                  <p>Categories</p>
                </div>
                <div class="icon">
                  <i class="fa-brands fa-buffer"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-12">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <div class='w-100 d-flex justify-content-end mb-2'>
                    <a href="insert" id="new_product" class="btn btn-primary ml-auto">New Category</a>
                  </div>
                  <table id="data-table" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>created_at</th>
                        <th>tools</th>
                      </tr>
                    </thead>
                    <tbody>
                      <td>1</td>
                      <td>name1</td>
                      <td>2022-01-01 12:12:12</td>
                      <td class="d-flex justify-content-around">
                        <a href="edit"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="#" id="delete"><i class="fa-solid fa-trash-can"></i></a>
                      </td>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
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
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../plugins/jszip/jszip.min.js"></script>
  <script src="../plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="../../sweetalert2/sweetalert2@11.js"></script>
  <!-- AdminLTE -->
  <script src="../dist/js/adminlte.js"></script>
  <!-- MY JS -->
  <script src="../../js/script.js"></script>
  <script>
    $(function() {
      validateAdminPermission(getCookie('email'), getCookie('token'));
      $('#user').html(`<i class="far fa-user"></i> ${getCookie('name')}`);

      let table = $('#data-table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        ajax: async (data, callback) => {
          const datas = await $.get({
            url: "/EPT_Beauty/back_end/category_api/get_categories.php",
          });

          // set count users
          $('#category-count').html(datas.data.length);
          callback(datas);
        },
        columnDefs: [{
          targets: -1,
          data: null,
          defaultContent: `
          <div class="d-flex justify-content-around">
            <a href="#"><i class="fa-solid fa-pen-to-square edit"></i></a>
            <a href="#" class="delete"><i class="fa-solid fa-trash-can"></i></a>
          </div>`,
        }, ],
        columns: [{
            data: 'id'
          },
          {
            data: 'name'
          },
          {
            data: 'created_at'
          },
          {
            data: null
          }
        ]
      });

      var Toast = Swal.mixin({
        showConfirmButton: false,
        timer: 2000
      });
      $('#data-table tbody').on('click', '.delete', function(e) {
        var data = table.row($(this).parents('tr')).data();
        e.preventDefault();
        Swal.fire({
          title: 'Are you sure?',
          text: `You want to delete id = ${data.id}`,
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.post("/EPT_Beauty/back_end/category_api/delete_category.php", {
              id: data.id,
              user_email: getCookie('email')
            }).done(function(data) {
              console.log(data.is_complete);

              let status = 'success';
              let message = data.message;

              Toast.fire(
                'Deleted!',
                message,
                status
              ).then(() => {
                location.reload();
              })
            }).fail(function(data) {
              console.log(data);
            });

          }
        })
      });
      $('#data-table tbody').on('click', '.edit', function(e) {
        var data = table.row($(this).parents('tr')).data();
        e.preventDefault();
        window.location.href = `edit/?id=${data.id}`;
      });

      logout();
    });
  </script>
</body>

</html>