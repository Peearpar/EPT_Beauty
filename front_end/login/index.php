<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- jQuery -->
    <script src="../jquery/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <script src="../fontawesome/js/all.min.js"></script>

    <title>Login</title>

</head>

<body>

    <!-- Login -->
    <div class="container d-flex mt-5 justify-content-center">
        <div class="card text-bg-light mb-3" style="width: 350px;">
            <div class="card-header fs-4 d-flex justify-content-between">
                Login
                <i class="fa-solid fa-arrow-right-to-bracket"></i>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter Password">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary mb-3 w-100">Login</button>
                        <a href="../register/index.php" class="btn btn-secondary mb-3 w-100">Register</a>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- SweetAlert2 -->
    <script src="../sweetalert2/sweetalert2@11.js"></script>

    <script>
        $(() => { ///function ready ตรงจะทำงานก็ต่อเมื่อ หน้า HTML ทำงานครบหมดแล้ว
            $("form").submit(function(e) { /////ถ้ามีการsubmit form เข้ามา ให้ทำ function ต่อไป ข้างล่าง
                e.preventDefault(); /////เป็น event ที่รับเข้ามา ให้ส่งข้อมูลอย่างเดียว ไม่ให้รีโหลดหน้าเวบอีกครั้ง
                const email = $('#email').val(); ////เอาค่าจากfield email ไปใส่ไว้ในตัวแปล email
                const password = $('#password').val(); ////เอาค่าจากfield password ไปใส่ไว้ในตัวแปล password

                $.post("../../back_end/login_api/login.php", { ////payload เตรียมส่งข้อมูล
                    email: email,
                    password: password,
                }).done(function(data) { /////ถ้าส่งไปแล้ว ไม่มีปัญหา
                    console.log(data.is_complete);

                    let status = 'success';
                    let message = data.message;

                    if (!data.is_complete) {
                        status = 'error';

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
                            console.log(data.data.role);
                            document.cookie = "token=" + data.data.token + "; max-age=86400; path=/"; /////set cookie ถ้าไปหน้าไหน ก็จะมีcookie นี้ ตามไปด้วย
                            document.cookie = "email=" + data.data.email + "; max-age=86400; path=/"; /////set cookie ถ้าไปหน้าไหน ก็จะมีcookie นี้ ตามไปด้วย
                            document.cookie = "name=" + data.data.name + "; max-age=86400; path=/"; /////set cookie ถ้าไปหน้าไหน ก็จะมีcookie นี้ ตามไปด้วย
                            document.cookie = "credit=" + data.data.credit + "; max-age=86400; path=/"; /////set cookie ถ้าไปหน้าไหน ก็จะมีcookie นี้ ตามไปด้วย

                            if(data.data.role === 'admin')
                            {
                                window.location.href = "/EPT_Beauty/front_end/admin"
                            }
                            else{
                                window.location.href = "../";
                            }
                        }
                    })
                }).fail(function(data) {
                    console.log(data);
                });

            });
        });
    </script>

</body>

</html>