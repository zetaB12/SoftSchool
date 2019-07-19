function RegistrarAlumno(){
    var nombre = document.querySelector('#nombre').value;
    let apellido = document.querySelector('#apellidos').value;
    let dni = document.querySelector('#dni').value;
    let celular = document.querySelector('#celular').value;
    let direccion = document.querySelector('#direccion').value;
    let fecha = document.querySelector('#fecha').value;


    validarAlumno(nombre, apellido, dni, celular, direccion, fecha);       
}

function validarAlumno(nombre, apellido, dni, celular, direccion, fecha) {
    
    let statusNombre = document.getElementById('statusNombre');
    let statusApellidos = document.getElementById('statusApellidos');
    let statusDni = document.getElementById('statusDni');
    let error = 'form-group col-md-6 has-error';
    let success = 'form-group col-md-6';

    let n = nombre.length !== 0 ? true : false;
    let a = apellido.length !== 0 ? true: false;
    let d = dni.length !== 0 ? true : false;

    n ? statusNombre.className = success : statusNombre.className = error;
    a ? statusApellidos.className = success : statusApellidos.className = error;
    d ? statusDni.className = success : statusDni.className = error;

    if(n && a && d)
        validateDates(nombre, apellido, dni, celular, direccion, fecha);
}

function validateDates(nombre, apellido, dni, celular, direccion, fecha){
        
    let parametros = {
        "nombre" : nombre,
        "apellido" : apellido,
        "dni" : dni,
        "celular": celular,
        "direccion": direccion,
        "fecha" : fecha
    };

    $.ajax({
        data: parametros,
        type: 'POST',
        url: '../controller/AlumnoController.php?operador=create_alumno',
        success: function (response) {
            console.log(response);
        },
        error: function () {
            console.log('error');
        }


    })
}