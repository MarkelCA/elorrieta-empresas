<!DOCTYPE html>
<html id='html-practicas'>
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="La web de Elorrieta para las Empresas. Encuentra alumnos cualificados para FCT's prácticas remuneradas o para formación en el entorno empresarial."/>
    <meta name="keywords" content="empresa, practicas, ciclos, dual, FCT, Elorrieta"/>
    <meta name="author" content="Markel Cuesta" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../src/img/favicon-black.ico" />


    <script src="../src/dist/styles.js"></script>
    <script defer src="../src/dist/script.js"></script>

  <title>Prácticas | Elorrieta Empresas</title>


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
                    <li><a href="./ciclos.php">Ciclos</a></li>
                    <li><a href="#">Prácticas</a></li>
                    <li><a href="./dual.php">Dual</a></li>
                    <li id='contacto'><a href="./contacto.php">Contacto</a></li>
                </ul>
            </nav>
      </div>
                <!-- <h1>Prácticas</h1> -->
            <div id="practicas-cover" class=' back-white'>
                <!-- <img src="../src/img/top-view-person-writing-on-laptop-with-copy-space.jpg" alt="practicas-cover"> -->
                <div id="descripcion-cover">
                    <h1>Prácticas</h1>
                    <p>¡Encuentra talento joven! Obsérvales trabajar en tu empresa durante unos meses, prepálalos para tu modelo de negocio y fórmalos en tus tecnologías. Si quieres encontrar profesional cualificado y con ganas de trabajar es tu oportunidad perfecta.</p>

                </div>
            </div>

        <div class="page-section" class='back-white'>
        <h3 class='section-subtitle'>Tus prácticas con Elorrieta:</h3>
            <div id="article-container">
                <div class="article" >
                    <p>En el IEFPS. Elorrieta Erreka Mari estamos interesados en contactar con nuevas empresas dispuestas a acoger alumnos del ciclo superior de Desarrollo de Aplicaciones Web en su período de Formación en Centros de Trabajo.</p>

                    <p>Dicho período de prácticas constituye para ellos un módulo (asignatura) más, que tiene su calificación en el expediente académico. Los alumnos se incorporan a la empresa durante un tiempo que totaliza 360 horas para poner en práctica los conocimientos adquiridos en el aula y tener una experiencia real de trabajo de campo.</p>


                </div>
            </div>
            
    </div>

        <div class="page-section" class='back-white'>
        <h3 class='section-subtitle'>Horarios:</h3>
            <div id="article-container">
                <div class="article" >
                    <p>Habitualmente las horas de prácticas van repartidas en tres meses a partir de primeros de marzo, con jornadas semanales no superiores a 35 horas y diarias no superiores a 8. El horario se pacta entre el centro educativo y la empresa.</p>
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
        <div class="empresa">
            <img src="../src/img/bosonit-logo.png" alt="bosonit-logo">
        </div>

      </div>
    </div>

        <div id="faq-container">
        <h3 id='title-faq'>Preguntas frecuentes</h3>
            <div id="faq">
                <?php print_faq_box("FCT"); ?>
            </div>
        </div>

  <footer class="zone footer">
    
        <nav class="footer-menu">
            <ul class="menu">
                <li><a href="./">Inicio</a></li>
                <li><a href="./ciclos.php">Ciclos</a></li>
                <li><a href="#">Prácticas</a></li>
                <li><a href="#">Dual</a></li>
                <li><a href="./contacto.php">Contacto</a></li>
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

