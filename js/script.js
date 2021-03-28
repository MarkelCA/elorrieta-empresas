$(function() {

    $('.familia').click(mostrarCiclos);

    function mostrarCiclos() {
        const cod_familia = $(this).attr('codigo_familia');

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


    // Credits hover animation
    $('.credits').mouseenter(function() {
        $('.credits a').css({
            'transition': 'all .3s',
            'color': 'rgba(0,0,0,0)',
        'background-image' : 'linear-gradient(to left, violet, indigo, blue, green, yellow, orange, red)',
          '-webkit-background-clip': 'text'
        });

        $('.credits').mouseleave(function() {
            $('.credits a').css({
                'color' : 'orange'
            });
        });
    });
});
