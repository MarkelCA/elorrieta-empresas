// Main scss
import "../src/estilos/scss/main.scss";

// Font awesome
import '@fortawesome/fontawesome-free/js/fontawesome.js'
import '@fortawesome/fontawesome-free/js/solid.js'

// Slick carousel
import 'slick-carousel/slick/slick.min'
import 'slick-carousel/slick/slick.scss'
import 'slick-carousel/slick/slick-theme.scss'

// Animate.css
import "animate.css/animate.min.css";



const $ = require( "jquery" );

$(function() {

  global_event_listeners();


function global_event_listeners() {
  // Boton del footer destinado a subir a la parte superior de la pagina
  $("#subir-btn").click(function() {
      $('html, body').animate({
          scrollTop: $(".header").offset().top
      }, 400);
  });


  // Boton del cover del index destinado a bajar hasta las opciones principales
  $("#go-down").click(function() {
      $('html, body').animate({
          scrollTop: $("#main-options").offset().top
      }, 400);
  });

  // Click en una familia de la pagina de ciclos
  $('.box').click(mostrarCiclos);


  
}


//Recoje un código y carga el ciclo por ajax
function mostrarCiclos() {
  const cod_familia = $(this).find('.familia').attr('codigo_familia');

  $('#controles-ciclos').load('../ajax/cargar_controles_ciclos.php?cod_familia='+cod_familia);
  $('#container-ciclos').load('../ajax/imprimirCiclos.php?familia='+cod_familia, ciclosCargados);


  $('#container-familias').slideUp(300, function() {
      cleanCiclosFilters();
      
  });
}

// Vuelve a la seleccion de familias en la pagina de ciclos
function cleanCiclosFilters() {
$('#clean-familia').click(clear);
  function clear() {
      $('#container-familias').slideDown(400, function() {
          $('#container-ciclos').html('');
          $('#controles-ciclos').html('');
      })
  }
};

// Despliega la información adicional de un ciclo
function desplegar_info_ciclo(codigo) {
  const content = $(`.ciclo[cod=${codigo}] .ciclo-content`);

      content.slideToggle(100);

  const icon = $(`.ciclo[cod=${codigo}] .dd-icon`)

  if(icon.hasClass('opened'))
      icon.removeClass('opened');
  else
      icon.addClass('opened');

}
// Vuelve a cargar los event listeners cuando cambias de ciclo
function ciclosCargados() {
  $('.ciclo.multiple').click(cargar_info_ciclo);

  // Si cambias de familia profesional
  $('#select-familia').change(function() {
      const cod_familia = $(this).val();
      $('#container-ciclos').load('../ajax/imprimirCiclos.php?familia='+cod_familia, function() {
          $('.ciclo.multiple').click(cargar_info_ciclo);
          cleanCiclosFilters();
      });

  });
}

// Carga por ajax la información de un ciclo
function cargar_info_ciclo() {
  const cod_ciclo = $(this).attr('cod');
  const content_div = $(`.ciclo.multiple[cod=${cod_ciclo}]`).find('.ciclo-content');

  // Si el contenido está vacío, lo cargamos, sino simplemente desplegamos el contenido
  if(content_div.html() === '')
      content_div.load('../ajax/cargar_contenido_ciclo.php?cod_ciclo='+cod_ciclo, () => desplegar_info_ciclo(cod_ciclo) );
  else
      desplegar_info_ciclo(cod_ciclo);
}

  $('#faq').slick();

  const animateCSS = (node, animation, prefix = 'animate__') =>
  // We create a Promise and return it
  new Promise((resolve, reject) => {
    const animationName = `${prefix}${animation}`;
    // const node = document.querySelector(element);

    node.classList.add(`${prefix}animated`, animationName);

    // When the animation ends, we clean the classes and resolve the Promise
    function handleAnimationEnd(event) {
      event.stopPropagation();
      node.classList.remove(`${prefix}animated`, animationName);
      resolve('Animation ended');
    }

    node.addEventListener('animationend', handleAnimationEnd, {once: true});
  });


  $('.box').hover(function() {
    animateCSS(this, 'pulse')

  })


});
