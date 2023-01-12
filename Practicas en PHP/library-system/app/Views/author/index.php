<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Autores</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Autores</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row ">
                                <div class="col-sm-6 d-flex align-items-center">
                                    <h3 class="card-title">
                                        Listado de autores
                                    </h3>
                                </div>
                                <div class="col-sm-6">
                                    <div class="float-sm-right">
                                        <a href="<?= base_url('authors/new') ?>" class="btn btn-primary">Crear</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <h1>Autores</h1>

                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?= $this->endSection() ?>