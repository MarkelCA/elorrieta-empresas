<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="description" content="La web de Elorrieta para las Empresas. Encuentra alumnos cualificados para FCT's prácticas remuneradas o para formación en el entorno empresarial."/>
    <meta name="keywords" content="empresa, practicas, ciclos, dual, FCT, Elorrieta"/>
    <meta name="author" content="Markel Cuesta" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="../src/img/favicon-black.ico" />


    <script defer src="../src/dist/styles.js"></script>
    <script defer src="../src/dist/script.js"></script>

    <title>Ciclos | Elorrieta Empresas</title>


    <!--Funciones php-->
    <?php require_once '../funciones.php';?>

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
                <li><a href="./practicas">Prácticas</a></li>
                <li><a href="./dual">Dual</a></li>
                <li id='contacto'><a href="contacto">Contacto</a></li>
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
                <li><a href="./practicas">Prácticas</a></li>
                <li><a href="./dual">Dual</a></li>
                <li><a href="./contacto">Contacto</a></li>
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
