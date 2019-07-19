const msg = '<span class="text-danger">*Completar todos los campos.</span>';
var valida = document.getElementById("validarSession");
valida.addEventListener("click", validarInputs);


function validarInputs(e){
    e.preventDefault();
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var status_login = document.getElementById("status_login");


    if (email === "" || password === ""){
        status_login.innerHTML = msg;
    }else {
        status_login.innerHTML = null;
        validarSession(email, password);
    }
}

function validarSession(email, password){
    let parametros = {
        "email" : email,
        "password" : password
    };
    $.ajax({
        data: parametros,
        type: 'POST',
        url: 'controller/UsuarioController.php?operador=validar_usuario',
        success: function (response) {
            console.log(response);
            if (response == "success") {
                location.href = "pages/starter.php";
            }else{
                status_login.innerHTML = '<span class="text-danger">*Email y/o contraseña incorrecta.</span>';
            }       
        },
        error: function() {
            console.log("No se ha podido obtener la información ");
        }
    });
}


    // var errorEmail = document.getElementById("erroUser");
    // var errorPassword = document.getElementById("erroPassword");
    // var isEmail, isPass = false;
    // if (email === ""){
    //     errorEmail.className = "form-group has-error";
    //     var msg = erro;
    // }else{
    //     errorEmail.className = "form-group has-feedback";
    //     isEmail = true;
    // }

    // if (password === ""){
    //     errorPassword.className = "form-group has-error";
    //     var msg = erro;
    // }
    // else{
    //     errorPassword.className = "form-group has-feedback";
    //     isPass = true;
    // }

//     status_login.innerHTML = msg;

    // if(isEmail && isPass){
    //     status_login.innerHTML = null;
    // }


    
    
    
    

