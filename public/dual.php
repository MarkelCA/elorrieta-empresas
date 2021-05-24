<!DOCTYPE html>
<html id='html-dual'>
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="La web de Elorrieta para las Empresas. Encuentra alumnos cualificados para FCT's prácticas remuneradas o para formación en el entorno empresarial."/>
    <meta name="keywords" content="empresa, practicas, ciclos, dual, FCT, Elorrieta"/>
    <meta name="author" content="Markel Cuesta" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../src/img/favicon-black.ico" />


    <script src="../src/dist/styles.js"></script>
    <script defer src="../src/dist/script.js"></script>

  <title>Dual | Elorrieta Empresas</title>


    <?php require_once '../funciones.php';?>

</head>

<body class='back-white'>
    <div id="container">
        <div class="header zone">
            <nav class="mobile-menu">
            <label for="show-menu" class="show-menu"><span class='first-letter'>E</span>lorrieta <span class='first-letter'>E</span>mpresas<div class="lines"></div></label>
                <input type="checkbox" id="show-menu">
    
                    <ul id="menu">
                    <li id='header-title'><a href="./"><span class='first-letter'>E</span>lorrieta <span class='first-letter'>E</span>mpresas</a></li>
                    <li><a href="./">Inicio</a></li>
                    <li><a href="./ciclos">Ciclos</a></li>
                    <li><a href="./practicas">Prácticas</a></li>
                    <li><a href="#">Dual</a></li>
                    <li id='contacto'><a href="./contacto">Contacto</a></li>
                </ul>
            </nav>
      </div>
                <!-- <h1>Prácticas</h1> -->
            <div id="dual-cover" class=' back-white'>
                <!-- <img src="../src/img/top-view-person-writing-on-laptop-with-copy-space.jpg" alt="practicas-cover"> -->
                <div id="descripcion-cover">
                    <h1>Dual</h1>
                    <p>En elorrieta apostamos por impulsar a los jóvenes a labrarse un futuro profesional mientras estudian. Es por ello que animamos a las empresas a confiar en una nueva generación de excelentes profesionales preparados. Sabemos que la frescura joven y el talento de nuestro alumnado aportará en tu empresa innovación, progreso y beneficio.</p>

                </div>
            </div>

        <div class="page-section" class='back-white'>
        <h3 class='section-subtitle'>Trabaja con nosotros:</h3>
            <div id="article-container">
                <div class="article" >
                    <p>Este es un programa en el que el alumno de segundo curso estudia y trabaja a la vez. Un caso típico en nuestra situación (turno de tarde) sería acudir a una empresa tres horas por las mañanas y al instituto por las tardes.</p>
                    <p>Hay dos vías para formalizar esta situación: beca o contrato.</p>
                </div>
            </div>
            
    </div>

        <div class="page-section" class='back-white'>
        <h3 class='section-subtitle'>Beca:</h3>
            <div id="article-container">
                <div class="article" >
                    <p>La beca no lleva aparejada subvención y el alumno cobra al menos un porcentaje del salario mínimo.</p>

                </div>
            </div>
    </div>

        <div class="page-section" class='back-white'>
        <h3 class='section-subtitle'>Contrato:</h3>
            <div id="article-container">
                <div class="article" >
                    <p>El contrato es de aprendizaje de los normales de lanbide. Hace falta que el alumno sea menor de 25 años y debe durar al menos un año. Lleva aparejada una subvención de unos 2.000.</p>

                </div>
            </div>
    </div>

    <div id="confian-en-nosotros">
        <h3>Confían en nosotros: </h3>
        <div id="empresas">
            <div class="empresa">
            <img src="../src/img/bikuma.png" alt="bikuma-logo">
            </div>
        <div class="empresa">
            <img src="../src/img/ELECNOR.png" alt="elecnor-logo">
        </div>

      </div>
    </div>

        <div id="faq-container">
        <h3 id='title-faq'>Preguntas frecuentes</h3>
            <div id="faq">
                <?php print_faq_box("DUAL"); ?>
            </div>
        </div>

  <footer class="zone footer">
    
        <nav class="footer-menu">
            <ul class="menu">
                <li><a href="./">Inicio</a></li>
                <li><a href="./ciclos">Ciclos</a></li>
                <li><a href="./practicas">Prácticas</a></li>
                <li><a href="#">Dual</a></li>
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

