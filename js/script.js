$(function() {

    $("#go-down").click(function() {
        console.log('aaa');
        $('html, body').animate({
            scrollTop: $("#main-options").offset().top
        }, 400);
    });
    //$('#faq').slick();
    $('.box').click(mostrarCiclos);

    function mostrarCiclos() {
        const cod_familia = $(this).find('.familia').attr('codigo_familia');

        $('#controles-ciclos').load('ajax/cargar_controles_ciclos.php');
        $('#container-ciclos').load('ajax/imprimirCiclos.php?familia='+cod_familia, ciclosCargados);


        //$('#container-familias').addClass('animate__animated animate__fadeOutUpBig').delay(1500);
        //setTimeout(function() {
            //$('#container-familias').css('display', 'none');
        //}, 500);
        //
        $('#container-familias').slideUp(400, function() {
            cleanCiclosFilters();


        });
    }

    function cleanCiclosFilters() {
    $('#clean-familia').click(clear);
        function clear() {
            $('#container-familias').slideDown(400, function() {
                $('#container-ciclos').html('');
                $('#controles-ciclos').html('');
            })
        }
    };

    function ciclosCargados() {
        $('#select-familia').change(function() {
            const cod_familia = $(this).val();
            $('#container-ciclos').load('ajax/imprimirCiclos.php?familia='+cod_familia, cleanCiclosFilters);

        });

    }
    // Boxes hover animation
    $('.grid-wrapper .box').mouseenter(hoverSeccionInicio);

    function hoverSeccionInicio() {
        $(this).addClass('animate__animated animate__pulse');
    }

    $('.grid-wrapper .box').mouseleave(function() {
        const target = $(this);
        setTimeout(() => target.removeClass('animate__animated animate__pulse'), 700);
    });


});
