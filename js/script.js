$(function() {
    $("#subir-btn").click(function() {
        $('html, body').animate({
            scrollTop: $(".header").offset().top
        }, 400);
    });

    $("#go-down").click(function() {
        $('html, body').animate({
            scrollTop: $("#main-options").offset().top
        }, 400);
    });
    //$('#faq').slick();
    $('.box').click(mostrarCiclos);

    function mostrarCiclos() {
        const cod_familia = $(this).find('.familia').attr('codigo_familia');

        $('#controles-ciclos').load('ajax/cargar_controles_ciclos.php?cod_familia='+cod_familia);
        $('#container-ciclos').load('ajax/imprimirCiclos.php?familia='+cod_familia, ciclosCargados);


        $('#container-familias').slideUp(300, function() {
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
    function desplegar_info_ciclo() {
        $('.ciclo.multiple').click(function() {
            const codigo = $(this).attr('cod');
            const content = $(`.ciclo[cod=${codigo}] .ciclo-content`);

                content.slideToggle(100);

            const icon = $(`.ciclo[cod=${codigo}] .dd-icon`)
            // if its closed, open it
            if(icon.hasClass('opened'))
                icon.removeClass('opened');
            else
                icon.addClass('opened');
        });

        function opened(codigo) {
            $(`.ciclo[cod=${codigo}] .dd-icon`).css({'transform' : 'rotate(0)'});
        }
        function closed(codigo) {
            $(`.ciclo[cod=${codigo}] .dd-icon`).css({'transform' : 'rotate(-90deg)'});
            
        }
    }
    function ciclosCargados() {
        $('#select-familia').change(function() {
            console.log('aa');
            const cod_familia = $(this).val();
            $('#container-ciclos').load('ajax/imprimirCiclos.php?familia='+cod_familia, function() {
                desplegar_info_ciclo();
                cleanCiclosFilters();
            });

        });

            desplegar_info_ciclo();


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
