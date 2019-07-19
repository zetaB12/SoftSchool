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

             <!--TODO: MODAL CREATE ALUMNO  -->
            <?php include 'modals/_createStudent.php'?>




        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <script src="../assets/alumno.js"></script>
<?php
require 'layout/footer.php';
?>