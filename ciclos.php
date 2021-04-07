<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="description" content="La web de Elorrieta para las Empresas. Encuentra alumnos cualificados para FCT's prácticas remuneradas o para formación en el entorno empresarial."/>
    <meta name="keywords" content="empresa, practicas, ciclos, dual, FCT, Elorrieta"/>
    <meta name="author" content="Markel Cuesta" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="img/favicon-black.ico" />

     <!--Font awesome-->
    <script defer src="https://kit.fontawesome.com/afa7046233.js" crossorigin="anonymous"></script>
    <!--JQuery-->
    <script defer src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!--JQuery UI-->
<script defer src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script defer src='js/script.js'></script>

  <title>Ciclos - Elorrieta Empresas</title>

    <!--Animate.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--Estilos propios-->
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <!--Slick-->
    <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick-theme.css"/>
    <script defer type="text/javascript" src="slick-1.8.1/slick.min.js"></script>

    <!--Funciones php-->
    <?php require_once 'funciones.php';?>

    <!--Activar carrousel-->
    <script defer src='js/ciclos.js'></script>
</head>
<body>
<div id="container">
    <div class="header zone">
        <nav class="mobile-menu">
        <label for="show-menu" class="show-menu"><span class='first-letter'>E</span>lorrieta <span class='first-letter'>E</span>mpresas<div class="lines"></div></label>
            <input type="checkbox" id="show-menu">
                <ul id="menu">
                <li id='header-title'><a href="./"><span class='first-letter'>E</span>lorrieta <span class='first-letter'>E</span>mpresas</a></li>
                <li><a href="./">Inicio</a></li>
                <li><a href="#">Ciclos</a></li>
                <li><a href="#">Prácticas</a></li>
                <li><a href="#">Dual</a></li>
                <li id='contacto'><a href="#">Contacto</a></li>
            </ul>
        </nav>
  </div>

    <div id="container-familias" class='grid-wrapper'>
        <?php imprimirFamilias(); ?>
    </div>
    <div id="container-with-controles">
        <div id="controles-ciclos"></div>
        <div id="container-ciclos"></div>
    </div>

        <div id="faq-container">
        <h3 id='title-faq'>Preguntas frecuentes</h3>
            <div id="faq">
                <?php print_faq_box("primero", "segundo"); ?>
            </div>
        </div>

  <footer class="zone footer">
    
        <nav class="footer-menu">
            <ul class="menu">
                <li><a href="./">Inicio</a></li>
                <li><a href="#">Ciclos</a></li>
                <li><a href="#">Prácticas</a></li>
                <li><a href="#">Dual</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a id='subir-btn'>Subir <i class="fas fa-arrow-circle-up"></i></a></li>
            </ul>
        </nav>

      <hr class='footer-hr'>
      <h4 class='credits'>Made with <i class="heart fas fa-heart"></i> by <a href="https://github.com/MarkelCA">Markel Cuesta</a></h4>
<p class='freepik'>
    Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
</p>
  </footer>

</div>
</body>
</html>
