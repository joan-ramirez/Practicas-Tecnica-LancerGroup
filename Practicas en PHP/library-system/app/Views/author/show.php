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
                                Mostrar autor
                            </h3>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <p class="card-text"><strong>Identificador:</strong> <?= $author->id; ?></p>
                            <p class="card-text"><strong>Nombre completo:</strong> <?= $author->getFullName(); ?></p>
                            <p class="card-text"><strong>Cantidad de libro:</strong> <?= count($author->books); ?></p>

                            <?php if ($author->books) : ?>

                                <hr>

                                <h3>Libros:</h3>

                                <?php foreach ($author->books as $book) : ?>
                                    <div class="card p-3">
                                        <strong>Detalles:</strong>
                                        <li><strong>Identificador:</strong> <?= $book->id; ?></li>
                                        <li><strong>Title:</strong> <?= $book->title; ?></li>
                                        <li><strong>Fecha de registro:</strong> <?= $book->created_at; ?></li>
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