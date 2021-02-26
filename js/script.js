$(function() {

    $('.grid-wrapper .box').mouseenter(hoverSeccionInicio);

    function hoverSeccionInicio() {
        $(this).addClass('animate__animated animate__pulse');
    }

    $('.grid-wrapper .box').mouseleave(function() {
        const target = $(this);
        setTimeout(() => target.removeClass('animate__animated animate__pulse'), 700);
    });

    $('.credits').mouseenter(function() {
        console.log('a');
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
