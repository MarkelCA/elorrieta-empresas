// Main scss
// import "../src/estilos/scss/main.scss";

// Font awesome
import '@fortawesome/fontawesome-free/js/fontawesome.js'
import '@fortawesome/fontawesome-free/js/solid.js'

// Slick carousel
import 'slick-carousel/slick/slick.min'
import 'slick-carousel/slick/slick.scss'
import 'slick-carousel/slick/slick-theme.scss'

// Animate.css
import "animate.css/animate.min.css";

import gsap from "gsap";
//import TweenMax from 'gsap/TweenMax'
//require('gsap/ScrollTrigger')
//gsap.registerPlugin(ScrollTrigger, Draggable, MotionPathPlugin); 

window.$ = require( "jquery" );

$(function() {

    //gsap.to("#down-arrows", {duration: 6, opacity: 0.3});
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

    //console.log('kjkj')
    $('#container-ciclos').css({
        height: 'auto',
    })
  $('#container-familias').slideUp(300, function() {
      cleanCiclosFilters();
  });

}

// Vuelve a la seleccion de familias en la pagina de ciclos
function cleanCiclosFilters() {
$('#clean-familia').click(clear);
  function clear() {
      const timeout = .4;

      gsap.to('#container-ciclos',
          {
          height : 0,
          padding : 0,
          margin : 0,
          onComplete: displayFamilias,
          duration: timeout
         })

      function displayFamilias() {
          //console.log('displayyy familias')
          $('#container-ciclos').html('');
          $('#controles-ciclos').html('');

          $('#container-familias').css({
            display : 'grid',
            //height : 0,
            //padding : 0
          })

          //$('#container-ciclos').css({
              //display : 'none',
              //height : 'auto',
          //})

      //gsap.to('#conatiner-familias', 
          //{ 
              ////height: auto ,
              ////padding: newPadding 

          //});
      }
  }
};

// Despliega la información adicional de un ciclo
function desplegar_info_ciclo(codigo) {
  const content = $(`.ciclo[cod=${codigo}] .ciclo-content`);

 if (content.css('display') === 'none')
    content.css({
        display : 'block',
        height : 0,
        padding : 0
    })

      let oldHeight = content.height();
      let oldPadding = content.css('padding');

      //console.log(oldPadding)
      let newHeight = oldHeight ? 0 : "auto";
      let newPadding = oldPadding ? '.5em 1em' : 0;

      const icon = $(`.ciclo[cod=${codigo}] .dd-icon`)

      if(icon.hasClass('opened')){
            icon.removeClass('opened');
      }
      else
          icon.addClass('opened');


      gsap.to(`.ciclo[cod=${codigo}] .ciclo-content`, 
          { 
              height: newHeight ,
              padding: newPadding,
              onComplete : hide_content
          });

    // Change to display none if its closing
    function hide_content(){
      if(!icon.hasClass('opened'))
        content.css('display', 'none')
    }


}
// Vuelve a cargar los event listeners cuando cambias de ciclo
function ciclosCargados() {
    $('html, body').animate({
        scrollTop: $(".header").offset().top
    }, 400);
  $('.ciclo').click(cargar_info_ciclo);

  // Si cambias de familia profesional
  $('#select-familia').change(function() {
      const cod_familia = $(this).val();
      $('#container-ciclos').load('../ajax/imprimirCiclos.php?familia='+cod_familia, function() {
          $('.ciclo').click(cargar_info_ciclo);
          cleanCiclosFilters();
      });

  });
}

// Carga por ajax la información de un ciclo
function cargar_info_ciclo() {
  const cod_ciclo = $(this).attr('cod');
  const content_div = $(`.ciclo[cod=${cod_ciclo}]`).find('.ciclo-content');

  // Si el contenido está vacío, lo cargamos, sino simplemente desplegamos el contenido
  if(content_div.html() === '')
      content_div.load('../ajax/cargar_contenido_ciclo.php?cod_ciclo='+cod_ciclo, () => desplegar_info_ciclo(cod_ciclo) );
  else
      desplegar_info_ciclo(cod_ciclo);

    const content_modulos = content_div.find('.content-modulos')
    $('.btn-modulos').click(cargar_modulos);

    
}

function cargar_modulos(e) {
    const content_modulos = $(this).closest('.ciclo-content').find('.content-modulos')
    const cod_ciclo = $(this).closest('.ciclo').attr('cod');

  if(content_modulos.html() === '')
    content_modulos.load('../ajax/cargar_contenido_modulos.php?cod_ciclo='+cod_ciclo, () => modulos_cargados(content_modulos))

    else {
            modulos_cargados(content_modulos)
    }
    // Stop Propagation para que no detecte el click en la caja de ciclos, tan solo lo haga en el botón de módulos
    e.stopPropagation()
}
function modulos_cargados(content_modulos){
    // Cerramos todas las ventanas abiertas actualmente para que no se acumulen
    $('.content-modulos').css('display' ,'none')
    // Abrimos la ventana de módulos actual
    content_modulos.css('display' ,'block')
    $('.content-modulos').click(close_module)

    function close_module(e) {
            $('.content-modulos').css('display','none')
            // Para que no se propague el evento y se me cierre el ciclo
            e.stopPropagation()
    }

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


  $('.box, .empresa').hover(function() {
    animateCSS(this, 'pulse')

  })


});
