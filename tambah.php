<?php
require 'session.php';
require 'functions.php';
if (isset($_POST["submit"])) {
    $hasil = tambah($_POST);
    if ($hasil > 0) {
        $berhasil = True;
    } else {
        echo "<scrippt> alert('data gagal ditambahkan') </script>";
        header('Location: tambah');
        exit();
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BEMP STATISTIKA UNJ</title>
    <!-- Icon Website -->
    <link rel="icon" href="img/LOGO BEMP STAT UNJ.png">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed">
    <div class="wrapper">



        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand  navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">




                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item" id="darkmode">
                    <a class="nav-link" href="#">
                        <i class="fas fa-moon"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside id="panellogout" class="sidebar-no-expand main-sidebar  sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index" class="brand-link">
                <img src="img/LOGO BEMP STAT UNJ.png" alt="BEMP STATISTIKA Logo" class="brand-image img-circle elevation-3">
                <span class="brand-text font-weight-light">BEMP STATISTIKA UNJ</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/AdminLTELogo.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class=" d-block dropdown-toggle" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">Admin</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="logout">Logout</a>
                        </div>
                    </div>
                </div>



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item ">
                            <a href="index" class="nav-link ">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Halaman Admin

                                </p>
                            </a>

                        </li>
                        <li class="nav-item ">
                            <a href="anggota" class="nav-link active ">
                                <i class="nav-icon fas fa-book "></i>
                                <p>
                                    Daftar Anggota

                                </p>
                            </a>


                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-store"></i>
                                <p>
                                    Kelola Toko
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="kategori" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kategori</p>
                                    </a>
                                </li>


                            </ul>
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
                            <h1 class="m-0">Tambah Data</h1>

                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="anggota">Daftar Anggota</a></li>
                                <li class="breadcrumb-item active">Tambah Data</li>

                            </ol>
                        </div>

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Anggota BEMP Statistika UNJ</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form id="quickForm" method="post">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputName">Nama Lengkap</label>
                                            <input type="password" class="form-control " id="exampleInputName" name="name" autocomplete="off" autofocus placeholder="Masukkan Nama Lengkap">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputNim">NIM</label>
                                            <input type="password" class="form-control" id="exampleInputNim" autocomplete="off" name="nim" placeholder="Masukkan NIM">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectRounded1">Angkatan</label>
                                            <select class="custom-select rounded-2" id="exampleSelectRounded1" name="angkatan">
                                                <option value="" selected>Pilih Angkatan</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectRounded0">Departemen</label>
                                            <select class="custom-select rounded-2" id="exampleSelectRounded0" name="departemen">
                                                <option value="" selected>Pilih Departemen</option>
                                                <option value="Ketua">Ketua</option>
                                                <option value="Sekretaris">Sekretaris</option>
                                                <option value="Bendahara">Bendahara</option>
                                                <option value="Kaderisasi">Kaderisasi</option>
                                                <option value="Advokasi">Advokasi</option>
                                                <option value="Rohis">Rohis</option>
                                                <option value="Entrepeneur">Entrepeneur</option>
                                                <option value="Humasi">Humasi</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email </label>
                                            <input type="email" class="form-control" autocomplete="off" id="exampleInputEmail1" name="email" placeholder="Masukkan Email Aktif">
                                        </div>


                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" name="submit" class="btn btn-primary mr-3">Submit</button>
                                        <a href="anggota"><button type="button" class="btn btn-primary">Kembali</button></a>
                                    </div>
                                </form>

                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer text-center">
            <strong>Copyright &copy; 2022 <a target="_blank" href="https://www.instagram.com/bempstatunj/">BEMP STATISTIKA UNJ</a>.</strong>


        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- jquery-validation -->
    <script src="plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="plugins/jquery-validation/additional-methods.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>

    <script>
        // Sweet Alert Berhasil
        <?php if (isset($berhasil)) : ?>

            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Data Berhasil Ditambahkan!',
                showConfirmButton: false,
                timer: 1500
            })


        <?php endif; ?>



        //Dark Mode
        let darkmode = document.getElementById('darkmode');
        let iconmoon = darkmode.querySelector('.fas')
        let navbar = document.getElementsByClassName('main-header')[0];
        let logout = document.getElementById('panellogout');
        if (localStorage.getItem('is-dark')) {
            document.body.classList.add('dark-mode');
            iconmoon.classList.add('fa-sun');
            iconmoon.classList.remove('fa-moon');
            navbar.classList.add('navbar-dark');
            navbar.classList.remove('navbar-light');
            logout.classList.add('modedark')
        }
        darkmode.addEventListener('click', () => {

            if (document.body.classList.contains('dark-mode')) {
                iconmoon.classList.add('fa-moon');
                iconmoon.classList.remove('fa-sun');
                localStorage.removeItem('is-dark');


            } else {
                iconmoon.classList.add('fa-sun');
                iconmoon.classList.remove('fa-moon');
                localStorage.setItem('is-dark', 1);
            }

            if (navbar.classList.contains('navbar-light')) {
                navbar.classList.add('navbar-dark');
                navbar.classList.remove('navbar-light');
            } else {
                navbar.classList.remove('navbar-dark');
                navbar.classList.add('navbar-light');
            }

            document.body.classList.toggle('dark-mode');
            logout.classList.toggle('modedark');
        })
    </script>
    <script>
        $(function() {
            $('#exampleInputName').attr("type", "text")
            $('#exampleInputNim').attr("type", "text")
            $('#quickForm').validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                    },
                    name: {
                        required: true,
                    },
                    departemen: {
                        required: true,
                    },
                    angkatan: {
                        required: true,
                    },
                    nim: {
                        required: true,

                    }

                },
                messages: {
                    email: {
                        required: "Email tidak boleh kosong!",
                        email: "Masukkan email dengan benar!"
                    },
                    name: {
                        required: "Nama tidak boleh kosong!"

                    },
                    departemen: {
                        required: "Departemen tidak boleh kosong!"
                    },
                    angkatan: {
                        required: "Angkatan tidak boleh kosong!"
                    },
                    nim: {
                        required: "Nim tidak boleh kosong!"

                    }
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
</body>

</html>
