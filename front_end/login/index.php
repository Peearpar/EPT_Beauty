<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- jQuery -->
    <script src="jquery/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <script src="fontawesome/js/all.min.js"></script>

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
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary mb-3 w-100">Login</button>
                    <a href="/EPT_Beauty/front_end/register" class="btn btn-secondary mb-3 w-100">Register</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>