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
                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('authors/'); ?>">Autores</a></li>
                        <li class="breadcrumb-item active">Crear nuevo</li>
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
                            <h3 class="card-title">
                                Crear autor
                            </h3>
                        </div>
                        <!-- /.card-header -->

                        <form id="form" method="post" action="<?= site_url('authors') ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Escribe el nombre">
                                </div>

                                <div class="form-group">
                                    <label for="surname">Apellido</label>
                                    <input type="text" name="surname" class="form-control" id="surname" placeholder="Escribe el apellido">
                                </div>

                                <div class="form-group">
                                    <label>Minimal</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Alabama</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="surname">país</label>
                                    <select name="country" id="country" class="form-control">

                                        <option value="">-- Selecciona un país --</option>

                                        <?php if ($countries) : ?>
                                            <?php foreach ($countries as $country) : ?>
                                                <option value="<?php echo $country->id; ?>">
                                                    <?php echo $country->name; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>

                                    </select>

                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Crear</button>
                            </div>
                        </form>

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

<?= $this->section('scripts') ?>

<script src="<?= base_url('js/author-validation-form.js') ?>"></script>

<?= $this->endSection() ?>