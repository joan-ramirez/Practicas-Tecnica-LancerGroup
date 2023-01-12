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
                        <div class="card-body">
                            <div id="listAuthors"></div>
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


<?= $this->section('scripts') ?>

<script>
    $(function() {
        $("#listAuthors").jsGrid({
            height: "100%",
            width: "100%",

            sorting: true,
            paging: true,

            data: db.clients,

            fields: [{
                    name: "Name",
                    type: "text",
                    width: 150
                },
                {
                    name: "Age",
                    type: "number",
                    width: 50
                },
                {
                    name: "Address",
                    type: "text",
                    width: 200
                },
                {
                    name: "Country",
                    type: "select",
                    items: db.countries,
                    valueField: "Id",
                    textField: "Name"
                },
                {
                    name: "Married",
                    type: "checkbox",
                    title: "Is Married"
                }
            ]
        });
    });
</script>

<?= $this->endSection() ?>