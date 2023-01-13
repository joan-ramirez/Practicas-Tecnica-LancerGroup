<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Library System</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href=" <?= base_url('css/plugins/all.min.css') ?>" />

    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('css/adminlte.min.css') ?>" />

    <!-- data-table -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/plugins/datatables.min.css') ?>">

    <?= $this->renderSection('head') ?>
</head>

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
                    <a href="/" class="nav-link">Inicio</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link p-3">
                <span class="brand-text font-weight-light">Library System</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item menu-open">

                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Administrador
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="<?= base_url('authors') ?>" class="nav-link  <?= substr_count(current_url(), base_url('authors')) ? 'active' : '' ?>">
                                        <i class=" far fa-circle nav-icon"></i>
                                        <p>Autores</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?= base_url('books') ?>" class="nav-link <?= substr_count(current_url(), base_url('books')) ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Libros</p>
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
        <?= $this->renderSection('content') ?>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block"><b>Version</b> 3.2.0</div>
            <strong>Copyright &copy; 2014-2021
                <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
        </footer>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url('js/plugins/jquery.min.js') ?>"></script>

    <!-- Bootstrap 4 -->
    <script src="<?= base_url('js/plugins/bootstrap.bundle.min.js') ?>"></script>

    <!-- AdminLTE App -->
    <script src="<?= base_url('js/adminlte.min.js') ?>"></script>


    <!-- jquery-validation -->
    <script src="<?= base_url('js/plugins/jquery-validation/jquery.validate.min.js') ?>"></script>
    <script src="<?= base_url('js/plugins/jquery-validation/additional-methods.min.js') ?>"></script>

    <!-- data-table -->
    <script type="text/javascript" src="<?= base_url('js/plugins/jquery.dataTables.min.js') ?>"></script>

    <!-- custom-script -->
    <script src="<?= base_url('js/app.js') ?>"></script>
    
    <?= $this->renderSection('scripts') ?>
</body>

</html>