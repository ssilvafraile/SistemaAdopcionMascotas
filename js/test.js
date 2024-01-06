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
});