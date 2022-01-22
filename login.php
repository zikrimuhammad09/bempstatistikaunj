<?php
session_start();
require 'functions.php';

if (isset($_SESSION["login"])) {
    header("Location: index");
    exit;
}

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cek = login("SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
    if (mysqli_num_rows($cek) > 0) {
        $_SESSION["login"] = true;
        $berhasil = True;
    } else {
        $error = True;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Icon Website -->
    <link rel="icon" href="img/LOGO BEMP STAT UNJ.png">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- MY CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body class="hold-transition login-page 
">
    <div class="login-box shadow-lg ">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <span class="h1 fw-3">Login</span>
            </div>
            <form action="#" method="post" id="quickForm">
                <div class="card-body ">
                    <div class="form-group">
                        <?php if (isset($error)) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Username / Password salah!
                                <button type="button" class="close ubah-warna-alert" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <div class="input-group ">
                            <input type="password" class="form-control " placeholder="Username" name="username" id="username" autocomplete="off">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group  ">
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" onclick="showPassword()" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Show Password</label>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col">
                            <button type="submit" class="swalDefaultSuccess btn btn-primary btn-block" name="submit">Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
            </form>


            <!-- /.social-auth-links -->


        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- jquery-validation -->
    <script src="plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="plugins/jquery-validation/additional-methods.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>

    <!-- Sweet Alert -->
    <script>
        <?php if (isset($berhasil)) : ?>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Login Berhasil',
                showConfirmButton: false,
                timer: 1500
            })
            setTimeout(() => {
                window.location.href = "index"
            }, 1700)
        <?php endif; ?>
    </script>

    <!-- Show Password dan Ubah type username ke text -->
    <script>
        $('#username').attr("type", "text");

        function showPassword() {
            if ($('#password').attr('type') == "password") {
                $("#password").attr("type", "text");


            } else {
                $("#password").attr("type", "password");
            }
        }
    </script>


</body>

</html>
