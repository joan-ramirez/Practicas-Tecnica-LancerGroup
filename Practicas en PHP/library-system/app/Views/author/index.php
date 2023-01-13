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
                    <div class="card p-2">
                        <div class="card-header m-0 p-0 pb-3 pt-2 mb-2">
                            <div class="row">
                                <div class="col-sm-6 d-flex align-items-center ">
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

                        <table class="table table-bordered" id="authors-list">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>pais</th>
                                    <th class="col-2">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($authors) : ?>
                                    <?php foreach ($authors as $author) : ?>
                                        <tr>
                                            <td><?= $author->id; ?></td>
                                            <td><?= $author->name; ?></td>
                                            <td><?= $author->surname; ?></td>
                                            <td><?= $author->country->getName() ?></td>
                                            <td>
                                                <a href="<?= base_url('authors/' . $author->id); ?>" class="btn btn-primary w-100 mb-2">Detalles</a>
                                                <a href="<?= base_url('authors/' . $author->id . '/edit'); ?>" class="btn btn-success w-100 mb-2">Editar</a>
                                                <form action="<?= base_url('authors/' . $author->id); ?>" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger w-100 mbm-2">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>

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

<script>
    $(document).ready(function() {
        $('#authors-list').DataTable();
    });
</script>

<?= $this->endSection() ?>