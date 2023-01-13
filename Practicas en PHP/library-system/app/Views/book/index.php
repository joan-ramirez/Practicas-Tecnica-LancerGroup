<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Libros</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Libros</li>
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
                        <div class="card-header card-header  m-0 p-0 pb-3 pt-2 mb-2">
                            <div class="row">
                                <div class="col-sm-6 d-flex align-items-center">
                                    <h3 class="card-title">
                                        Listado de libros
                                    </h3>
                                </div>
                                <div class="col-sm-6">
                                    <div class="float-sm-right">
                                        <a href="<?= base_url('books/new') ?>" class="btn btn-primary">Crear</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <table class="table table-bordered" id="authors-list">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($books) : ?>
                                    <?php foreach ($books as $book) : ?>
                                        <tr>
                                            <td><?php echo $book['id']; ?></td>
                                            <td>
                                                <button class="btn btn-primary">Detalles</button>
                                                <button class="btn btn-success">Actualizar</button>
                                                <button class="btn btn-danger">Eliminar</button>
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