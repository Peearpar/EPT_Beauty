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
          <a class="nav-link" data-toggle="dropdown" href="#" id="user">
            <i class="far fa-user"></i>
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
              <a href="../categories" class="nav-link">
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
              <a href="../orders" class="nav-link active">
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
              <h1 class="m-0">Order Details</h1>
            </div>
          </div>
        </div>
      </div>

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <!-- small box -->
            <div class="row col-12">
              <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3 id="order-detail-count">44</h3>
                    <p>Order Details</p>
                  </div>
                  <div class="icon">
                    <i class="fa-solid fa-folder-open"></i>
                  </div>
                </div>
              </div>

              <!-- small box -->
              <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3 id="order-detail-sum">44</h3>
                    <p>Total</p>
                  </div>
                  <div class="icon">
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title" id="user-id">User id</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-row">
                      <div class="col">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" readonly="readonly">
                      </div>
                      <div class="col">
                        <label for="surname">Surname</label>
                        <input type="text" class="form-control" id="surname" readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" readonly="readonly">
                    </div>
                    <div class="form-row">
                      <div class="col">
                        <label for="district">District</label>
                        <input type="text" class="form-control" id="district" readonly="readonly">
                      </div>
                      <div class="col">
                        <label for="sub-district">Sub-District</label>
                        <input type="text" class="form-control" id="sub-district" readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="zip_code">Zip_Code</label>
                      <input type="number" class="form-control" id="zip_code" readonly="readonly">
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" readonly="readonly">
                    </div>
                    <div class="form-row">
                      <div class="col">
                        <label for="credit">Credit</label>
                        <input type="text" class="form-control" id="credit" readonly="readonly">
                      </div>
                      <div class="col">
                        <label>Role</label>
                        <input type="text" class="form-control" id="role" readonly="readonly">
                      </div>
                    </div>
                  </div>
                </form>

              </div>
            </div>


            <!-- ./col table -->
            <div class="col-12">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="data-table" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>order_id</th>
                        <th>image</th>
                        <th>cat_name</th>
                        <th>prod_name</th>
                        <th>qty</th>
                        <th>price</th>
                        <th>discount</th>
                        <th>created_at</th>
                      </tr>
                    </thead>
                    <tbody>
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
      loadUser();
      let table = $('#data-table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        ajax: async (data, callback) => {
          const datas = await $.post({
            url: "/EPT_Beauty/back_end/order_detail_api/get_order_detail.php",
          }, {
            order_id: getParam().order_id,
            user_email: getCookie('email')
          });

          const sumResult = datas.data.reduce((sum, data) => {
            return sum + (100 - data.discount) * 0.01 * data.price * data.qty;
          }, 0);

          // set count users
          $('#order-detail-count').html(datas.data.length);
          $('#order-detail-sum').html('฿' + numberFormat(sumResult));

          callback(datas);
        },
        columnDefs: [{
            targets: 2,
            data: 'path_img',
            render: function(data, type, row, meta) {
              return `
              <div class="d-flex justify-content-around">
                <img src="${data}" alt="${data}"  width="50px"/>
              </div>`;
            }
          },
          {
            targets: -2,
            data: 'discount',
            render: function(data, type, row, meta) {
              return data + '%';
            }
          },
          {
            targets: -3,
            data: 'price',
            render: function(data, type, row, meta) {
              return '฿' + numberFormat(data);
            }
          }
        ],
        columns: [{
            data: 'id'
          },
          {
            data: 'order_id'
          },
          {
            data: 'path_img'
          },
          {
            data: 'category_name'
          },
          {
            data: 'prod_name'
          },
          {
            data: 'qty'
          },
          {
            data: 'price'
          },
          {
            data: 'discount'
          },
          {
            data: 'created_at'
          }
        ]
      });
      logout();
    });

    function getParam() {
      const params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop),
      });

      return params;
    }

    function loadUser() {
      const id = getParam();

      $.post("/EPT_Beauty/back_end/user_api/get_user_by_id.php", {
        id: getParam().user_id,
        user_email: getCookie('email')
      }).done(function(data) {
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

        $('#user-id').html(`User id = ${data.data.id}`);
        $('#name').attr('value', data.data.name);
        $('#surname').attr('value', data.data.surname);
        $('#email').attr('value', data.data.email);
        $('#district').attr('value', data.data.district);
        $('#sub-district').attr('value', data.data.sub_district);
        $('#zip_code').attr('value', data.data.zip_code);
        $('#address').attr('value', data.data.address);
        $('#credit').attr('value', '฿' + numberFormat(data.data.credit));
        $('#role').attr('value', data.data.role);

      }).fail(function(data) {
        console.log(data);
      });

    }
  </script>
</body>

</html>