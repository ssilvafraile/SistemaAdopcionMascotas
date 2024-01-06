document.addEventListener("DOMContentLoaded", function () {
    $(document).ready(function () {
        // Establecer la opacidad inicial en 0
        $('body').css('opacity', 0);

        // Esperar 2000 milisegundos (2 segundos) antes de iniciar la animación
        setTimeout(function () {
            // Cambiar la opacidad a 1 gradualmente
            $('body').animate({opacity: 1}, 500, function () {
            });
        }, 200);
    });
    document.getElementById("login").addEventListener('submit', validarFormulario);
});

//validamos formulario en el front usando js
function validarFormulario(evento)
{

    evento.preventDefault();
    var user = document.getElementById("txtUser").value;
    var pass = document.getElementById("txtPass").value;

    if (!user.trim()) {
        document.getElementById("txtUser").focus();
        Swal.fire({
            icon: "error",
            title: "Datos incorrectos",
            text: "Usuario o contraseña inválidos",
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    if (!pass.trim())
    {
        document.getElementById("txtPass").focus();
        Swal.fire({
            icon: "error",
            title: "Datos incorrectos",
            text: "Usuario o contraseña inválidos",
            confirmButtonText: 'Aceptar',
        });
        return false;
    }

    var parametros = {u: user, p: pass};
    $.ajax({
        type: "POST",
        dataType: "json",
        data: parametros,
        url: 'clases/ingresaLogin.php',
        success: function (response)
        {
            if (response == 1)
            {
                Swal.fire({
                    icon: "success",
                    title: "Inicio de Sesión Exitosa",
                    text: "Bienvenido",
                    confirmButtonText: 'Aceptar',
                    willClose: () => {
                        // Redirige después de cerrar la alerta (al hacer clic en "Aceptar")
                        window.location.href = "./clases/publicacionesAdmin.php";
                    }
                });
            } else
            {
                Swal.fire({
                    icon: "error",
                    title: "Inicio de Sesión",
                    text: "Error en las credenciales de inicio de sesión",
                    confirmButtonText: 'Aceptar',
                    willClose: () => {
                        // Redirige después de cerrar la alerta (al hacer clic en "Aceptar")
                        document.getElementById("txtUser").focus();
                        document.getElementById("txtUser").value = "";
                        document.getElementById("txtPass").value = "";
                    }
                });
            }
        },
        error: function (xhr, status, error) {
            // Se ejecuta cuando la solicitud AJAX tiene algún error
            alert("Error de usuario o contraseña");
            console.log("Error en la solicitud AJAX");
            console.log(xhr.responseText);
            console.log(status);
            console.log(error);
        }
    });
    document.getElementById("txtUser").focus();
}


function limpiar()
{
    $("#formulario")[0].reset();
}

