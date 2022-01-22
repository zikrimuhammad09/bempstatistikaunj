<?php
require 'session.php';
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
                    <a href="index.php" class="nav-link">Home</a>
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
                            <a href="anggota" class="nav-link  ">
                                <i class="nav-icon fas fa-book "></i>
                                <p>
                                    Daftar Anggota

                                </p>
                            </a>


                        </li>

                        <li class="nav-item menu-is-opening menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-store"></i>
                                <p>
                                    Kelola Toko
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item ">
                                    <a href="kategori" class="nav-link active">
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
                            <h1 class="m-0">Kategori</h1>

                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">Kelola Toko</li>
                                <li class="breadcrumb-item active">Kategori</li>
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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Rendering engine</th>
                                                    <th>Browser</th>
                                                    <th>Platform(s)</th>
                                                    <th>Engine version</th>
                                                    <th>CSS grade</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Trident</td>
                                                    <td>Internet
                                                        Explorer 4.0
                                                    </td>
                                                    <td>Win 95+</td>
                                                    <td> 4</td>
                                                    <td>X</td>
                                                </tr>
                                                <tr>
                                                    <td>Trident</td>
                                                    <td>Internet
                                                        Explorer 5.0
                                                    </td>
                                                    <td>Win 95+</td>
                                                    <td>5</td>
                                                    <td>C</td>
                                                </tr>




                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
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
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
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
</body>

</html>
