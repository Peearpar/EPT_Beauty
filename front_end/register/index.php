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

    <title>Register</title>

</head>

<body>

    <!-- Register -->
    <div class="container d-flex mt-5 justify-content-center">
        <div class="card text-bg-light mb-3" style="width: 350px;">
            <div class="card-header fs-4 d-flex justify-content-between">
                Register
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                </div>
                <div class="mb-3">
                    <label for="surname" class="form-label">Surame</label>
                    <input type="text" class="form-control" id="surname" placeholder="Last Name">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" placeholder="Phone Number">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Address">
                </div>
                <div class="mb-3">
                    <label for="district" class="form-label">District</label>
                    <input type="text" class="form-control" id="district" placeholder="District">
                </div>
                <div class="mb-3">
                    <label for="subdistrict" class="form-label">Sub District</label>
                    <input type="text" class="form-control" id="subdistrict" placeholder="Sub District">
                </div>
                <div class="mb-3">
                    <label for="zip_code" class="form-label">ZipCode</label>
                    <input type="text" class="form-control" id="zip_code" placeholder="ZipCode">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary mb-3 w-100">Register</button>
                    <a href="/EPT_Beauty/front_end/" id="back_btn" class="btn btn-secondary mb-3 w-100">Back</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>