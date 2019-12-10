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

        <btn class="btn btn-primary" data-toggle="modal" data-target="#createAlumno">Crear alumno</btn>

        <!-- <btn class="btn btn-success" id="listarAlumno">listar alumno</btn> -->
        <input type="text" class="search form-control col-8" placeholder="Buscar" id="search">
        <div class="table-responsive text-nowrap">
        
            <!--Table-->
            <table class="table table-striped" id="tableS">
                <!--Table head-->
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Dni</th>
                        <th>Direccion</th>
                    </tr>
                </thead>
                <tbody id="tbodyStudent">
                </tbody>
                <!--Table body-->
            </table >
            <!--Table-->
        </div>
    </section>
    <!--Section: Live preview-->

    <!--TODO: MODAL CREATE ALUMNO  -->
    <?php include 'modals/_createStudent.php' ?>




    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="../assets/alumno.js"></script>
<?php
require 'layout/footer.php';
?>