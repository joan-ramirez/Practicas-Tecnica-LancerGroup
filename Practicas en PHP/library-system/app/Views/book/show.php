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
                        <li class="breadcrumb-item"><a href="#">Libros</a></li>
                        <li class="breadcrumb-item active">Mostrar</li>
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
                                Mostrar libro
                            </h3>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <h5 class="card-title"><strong>Titulo:</strong> <?php echo $book->title; ?></h5>
                            <p class="card-text"><strong>Edicion:</strong> <?php echo $book->edition; ?></p>

                            <?php if ($book->authors) : ?>
                                <hr>

                                <h3>Autores:</h3>

                                <?php foreach ($book->authors as $author) : ?>
                                    <div class="card p-3">
                                        <strong>Detalles:</strong>
                                        <li><strong>Nombre completo:</strong> <?= $author->getFullName(); ?></li>
                                        <li><strong>Pais:</strong> <?= $author->country->getName(); ?></li>
                                    </div>

                                <?php endforeach; ?>


                            <?php endif; ?>
                        </div>


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