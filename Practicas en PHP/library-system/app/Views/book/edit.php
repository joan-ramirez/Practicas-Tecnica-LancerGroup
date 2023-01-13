<?= $this->extend('layouts/app') ?>


<?= $this->section('head') ?>
<link rel="stylesheet" href="<?= base_url('css/plugins/select2-bootstrap4.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('css/plugins/select2.min.css') ?>">
<?= $this->endSection() ?>



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
                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('books/'); ?>">Libros</a></li>
                        <li class="breadcrumb-item active">Editar</li>
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
                                Editar de libros
                            </h3>
                        </div>
                        <!-- /.card-header -->

                        <form id="form" method="post" action="<?= site_url('books/' . $book->id) ?>">
                            <input type="hidden" name="_method" value="PUT">

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="title">Titulo</label>
                                    <input type="text" name="title" class="form-control" value="<?= $book->title ?>" id="title" placeholder="Escribe el titulo">
                                </div>

                                <div class="form-group">
                                    <label for="edition">Edición</label>
                                    <textarea name="edition" id="edition" class="form-control" placeholder="Escribe la edición"><?= $book->edition ?></textarea>
                                </div>

                                <!-- /.col -->
                                <div class="form-group">
                                    <label class="edition">Selecciona los autores</label>
                                    <div class="select2-purple">
                                        <select class="select2 form-control" name="authors[]" multiple=data-placeholder="Select a State" data-dropdown-css-class="select2-purple">
                                            <?php if ($authors) : ?>
                                                <?php foreach ($authors as $author) : ?>
                                                    <option value="<?= $author->id; ?>"><?= $author->getFullName(); ?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </select>

                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
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

<script src="<?= base_url('js/plugins/select2.full.min.js') ?>"></script>

<script src="<?= base_url('js/book-validation-form.js') ?>"></script>

<script>
    $(document).ready(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    });
</script>

<?= $this->endSection() ?>