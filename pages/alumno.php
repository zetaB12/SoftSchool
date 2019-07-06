<?php

session_start();
if (!isset($_SESSION['user'])) {
    header("location:../index.php");
}

require 'layout/main_head.php';

require 'layout/sidebar.php';

?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Alumnos
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Alumnos</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-md-6 col-xs-12 mb-1">
                        <h2 class="content-header-title">Categorias</h2>
                    </div>

                </div>
                <div class="content-body">
                    <section id="basic-form-layouts">
                        <div class="row match-height">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title" id="basic-layout-form">
                                            <button class="btn btn-sm btn-success" data-toggle="modal"
                                                    data-target="#create_categoria">
                                                Nueva categoria
                                            </button>
                                        </h4>
                                        <a class="heading-elements-toggle"><i
                                                    class="icon-ellipsis font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                                <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body collapse in">
                                        <div class="card-block">
                                            <div class="table-responsive">
                                                <table id="table_categoria" class="table table-bordered table-sm">
                                                    <thead>
                                                    <tr>
                                                        <th width="5%">OP</th>
                                                        <th width="5%">ID</th>
                                                        <th width="30%">NOMBRE DE CATEGORIA</th>
                                                        <th width="50%">DESCRIPCION</th>
                                                        <th width="10%">ESTADO</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>OP</th>
                                                        <th>ID</th>
                                                        <th>NOMBRE DE CATEGORIA</th>
                                                        <th>DESCRIPCION</th>
                                                        <th>ESTADO</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <script src="../assets/alumno.js"></script>
<?php
require 'layout/footer.php';
?>