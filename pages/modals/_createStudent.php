<div class="modal fade text-xs-left" id="createAlumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel2"><i class="fa fa-user"></i> Nuevo alumno</h4>
            </div>
            <div class="modal-body">
                <div>
                    <div class="form-row">
                        <div class="form-group col-md-6" id="statusNombre">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                        </div>
                        <div class="form-group col-md-6" id="statusApellidos">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos" placeholder="Apellidos">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6" id="statusDni">
                            <label for="dni">Dni</label>
                            <input type="text" class="form-control" id="dni" placeholder="Dni" maxlength="8">
                        </div>
                        <div class="form-group col-md-6" id="statusCelular">
                            <label for="celular">Celular</label>
                            <input type="text" class="form-control" id="celular" placeholder="Celular">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" id="direccion" placeholder="Direccion">
                        </div>
                    </div>     
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="fecha">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="fecha" placeholder="Fecha de nacimiento">
                        </div>
                    </div>           
                    &nbsp;
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="RegistrarAlumno();">Registrar</button>
            </div>
        </div>
    </div>
</div>