document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("formulario").addEventListener('submit', validaPublicacion);
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
function validaPublicacion(evento)
{
    evento.preventDefault();
    var nombre = document.getElementById("txtNombre").value;
    var apellido = document.getElementById("txtApellido").value;
    var edad = document.getElementById("txtEdad").value;
    var telefono = document.getElementById("txtTelefono").value;
    var correo = document.getElementById("txtCorreo").value;
    var repite_correo = document.getElementById("txtCorreo2").value;
    var sexo = document.getElementById("id_sexo").value;
    var region = document.getElementById("id_region").value;
    //var foto = document.getElementById("id_foto").value;
    var upload_foto = document.getElementById("id_foto");
    var foto = upload_foto.files[0];

    var descripcion = document.getElementById("txtMensaje").value;


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
    if (!apellido.trim())
    {
        document.getElementById("txtApellido").focus();
        Swal.fire({
            icon: "info",
            title: "",
            text: "Favor ingresa tu apellido",
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    if (!edad.trim())
    {
        document.getElementById("txtEdad").focus();
        Swal.fire({
            icon: "info",
            title: "",
            text: "Favor ingresa tu edad",
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    if (!telefono.trim())
    {
        document.getElementById("txtTelefono").focus();
        Swal.fire({
            icon: "info",
            title: "",
            text: "Telefono es obligatorio",
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
            text: "Favor ingresa un correo valido",
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    if (!repite_correo.trim())
    {
        document.getElementById("txtCorreo2").focus();
        Swal.fire({
            icon: "info",
            title: "",
            text: "Favor ingresar un correo valido",
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    if (correo !== repite_correo)
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
    if (sexo == 1)
    {
        document.getElementById("id_sexo").focus();
        Swal.fire({
            icon: "info",
            title: "",
            text: "Favor seleccionar su sexo",
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    if (region == 1)
    {
        document.getElementById("id_region").focus();
        Swal.fire({
            icon: "info",
            title: "",
            text: "Favor seleccionar su Región",
            confirmButtonText: 'Aceptar',
        });
        return false;
    }

    const tmp_foto = upload_foto.files.length;
    if (tmp_foto <= 0)
    {
        document.getElementById("id_foto").focus();
        Swal.fire({
            icon: "info",
            title: "",
            text: "Favor seleccionar una foto",
            confirmButtonText: 'Aceptar',
        });
        return false;
    }
    if (!descripcion.trim())
    {
        document.getElementById("txtMensaje").focus();
        Swal.fire({
            icon: "info",
            title: "",
            text: "Favor ingrese una descripcion",
            confirmButtonText: 'Aceptar',
        });
        return false;
    }

    //
    var datos = new FormData($("#formulario")[0]);
    console.log(datos);
    $.ajax({
        url: 'clases/ingresaPublicacion.php',
        type: 'POST',
        data: datos,
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function (response)
        {
            if (response == 1)
            {
                Swal.fire({
                    icon: "success",
                    title: "",
                    text: "Publicación creada",
                    confirmButtonText: 'Aceptar',
                });
                limpiar();
            }
            if (response == 0)
            {
                Swal.fire({
                    icon: "error",
                    title: "",
                    text: "Error al ingresar publicación en la BD",
                    confirmButtonText: 'Aceptar',
                });
            }
            if (response == 2)
            {
                Swal.fire({
                    icon: "error",
                    title: "",
                    text: "Debe seleccionar una foto .jpg o .png",
                    confirmButtonText: 'Aceptar',
                });
            }
        },
        error: function (xhr, status, error) {
            // Se ejecuta cuando la solicitud AJAX tiene algún error
            alert("Error al Publicar");
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



