document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("formulario").addEventListener('submit', validarFormulario);
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
});

//validamos formulario en el front usando js
function validarFormulario(evento)
{
    evento.preventDefault();
    var nombre = document.getElementById("txtNombre").value;
    var correo = document.getElementById("txtCorreo").value;
    var confirmaCorreo = document.getElementById("txtCorreo2").value;
    var mensaje = document.getElementById("txtMensaje").value;

    if (!nombre.trim())
    {
        document.getElementById("txtNombre").focus();
        Swal.fire({
            icon: "info",
            title: "",
            text: "Favor ingresar un nombre valido",
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    if (!correo.trim())
    {
        document.getElementById("txtCorreo").focus();
        Swal.fire({
            icon: "info",
            title: "",
            text: "Favor ingresar un correo",
            confirmButtonText: 'Aceptar',
        });
        return false;
    }

    if (!confirmaCorreo.trim())
    {
        document.getElementById("txtCorreo2").focus();
        Swal.fire({
            icon: "info",
            title: "",
            text: "Favor ingresar un correo",
            confirmButtonText: 'Aceptar',
        });
    }
    if (correo !== confirmaCorreo)
    {
        document.getElementById("txtCorreo2").focus();
        document.getElementById("txtCorreo2").value = "";
        Swal.fire({
            icon: "error",
            title: "",
            text: "Favor verificar que correos sean iguales",
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    if (!mensaje.trim())
    {
        document.getElementById("txtMensaje").focus();
          Swal.fire({
            icon: "info",
            title: "",
            text: "Favor ingresar un comentario",
            confirmButtonText: 'Aceptar',
        });
        return false;
    }

    var parametros = {nom: nombre, email: correo, msj: mensaje};
    $.ajax({
        type: "POST",
        dataType: "json",
        data: parametros,
        url: 'clases/ingresaMensaje.php',
        success: function (response)
        {
            if (response == 1)
            {
                Swal.fire({
                    icon: "success",
                    title: "",
                    text: "Mensaje Enviado Exitosamente",
                    confirmButtonText: 'Aceptar',
                });
                limpiar();
            } else
            {
                Swal.fire({
                    icon: "error",
                    title: "",
                    text: "Error al ingresar mensaje",
                    confirmButtonText: 'Aceptar',
                });
            }
        },
        error: function (xhr, status, error) {
            // Se ejecuta cuando la solicitud AJAX tiene algún error
            alert("Error al enviar mensaje intentalo mas tarde");
            console.log("Error en la solicitud AJAX");
            console.log(xhr.responseText);
            console.log(status);
            console.log(error);
        }
    });
    document.getElementById("txtNombre").focus();
}

function limpiar()
{
    $("#formulario")[0].reset();
}
