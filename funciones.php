<?php

require_once '../datos/datos.php';
require_once '../datos/faq.php';
require_once '../datos/observaciones.php';

/*
 * Función que imprime las cajas de familia profesional de la página /ciclos
 */
function imprimirFamilias() {
    global $ciclo;
    global $familia;

    foreach( $ciclo as $familia_ciclo => $ciclo )
    { 
        echo "<a class='box'>\n";
        echo "<div codigo_familia='$familia_ciclo' class='familia'>\n";
        echo "<img alt='imagen-familia' src='{$familia[$familia_ciclo]['img']}' />\n";
        echo "</div>\n";
        echo '<h3>',$familia[$familia_ciclo]['titulo'],"</h3>\n";
        echo "</a>\n";
    }
}
function ciclo_es_medio($ciclo) {
    return strtolower($ciclo['tipo']) === 'medio';
}

/*
 * Buscamos datos adicionales del ciclo (observaciones, descripcion, temario)
 */
function imprimir_datos_ciclo($ciclo) 
{
    $datos = [];
    $cod_ciclo = $ciclo['codigo'];
    $observaciones = get_observaciones($cod_ciclo, 'observaciones');
    $descripcion = get_observaciones($cod_ciclo, 'descripcion');
    $temario = get_observaciones($cod_ciclo, 'temario');

    $has_observaciones = !empty($observaciones);
    $has_descripcion = !empty($descripcion);
    $has_temario = !empty($temario);

    if($has_observaciones){
        $datos['observaciones'] = $observaciones;
        
        // Nos interesa saber si tiene ambas para organizar el layout
        if($has_temario){
            $has_both = TRUE;
        }

    }
    if ($has_descripcion)
        $datos['descripcion'] = $descripcion;
    

    // Añadimos el @ para suprimir el warning si la variable es null
    if(@$has_both)
        $mid_content_width = TRUE;
    else 
        $mid_content_width = FALSE;


    // Si tiene datos le añadimos la correspondiente clase
    $multiple = $datos ? 'multiple' : '';
    echo "<div cod='$ciclo[codigo]' class='ciclo $multiple'>";

    // Si tiene datos le añade el icono del drop-down.
    $icono_drop_down = $datos ? "<span class='dd-icon'><i class='fas fa-sort-down'></i></span>" : '' ;
    echo "<li class='ciclo-title'>$ciclo[nombre]:<span class='horas-ciclo'>$ciclo[horas] horas.</span>$icono_drop_down</li>";


    // Si no tiene datos creo el div contenido y el de modulos, cierro el tag de ciclos y salgo del metodo
    if (!$datos){
        // Le añadimos el display block para que no de problemas al abrir los módulos
        echo "<div class='ciclo-content' style='display:block'>";
                echo "<div class='content-modulos'></div>";
            echo "</div>"; // ciclo-content
        echo '</div>'; // .ciclo
        return;
    }

    //Contenido adicional del ciclo
    echo "<div class='ciclo-content'>";

    // Imprimimos las observaciones (Si además tiene temario su anchura será la mitad)
    if($has_observaciones)
        imprimir_observaciones_ciclo($observaciones, $mid_content_width);
    
    // Imprimimos el temario (Si además tiene observaciones su anchura será la mitad)
    if($has_temario)
        imprimir_temario_ciclo($temario, $mid_content_width);

    if($has_descripcion)
        imprimir_descripcion_ciclo($descripcion, $mid_content_width);

    echo "<button class='btn-modulos'><h3><i class='fas fa-book-open'></i> Módulos</h3></button>";

    echo "<div class='content-modulos'></div>";
        echo '</div>'; // .ciclo-content
    echo '</div>'; // .ciclo

}
/*
 * Función que busca un ciclo por su código
 */
function get_ciclo($cod_ciclo) {
    global $ciclo;
    foreach($ciclo as $familia)
        foreach($familia as $ciclo_actual)
        if($ciclo_actual['codigo'] === $cod_ciclo)
            return $ciclo_actual;
}
/*
 * Cargars los módulos de un ciclo
 */
function cargar_modulos($cod_ciclo) {
    global $modulos;
    global $ciclo;
    global $obs;

    $ciclo = get_ciclo($cod_ciclo);
    $nombre_ciclo = $ciclo['nombre'];
    $modulos = $modulos[$cod_ciclo];
    $modulos_primero = $modulos['primero'];
    $modulos_segundo = $modulos['segundo'];

    echo '<div><i class="close-modulos fas fa-times"></i></div>';
    echo "<h3 class='title-modulos'>$nombre_ciclo</h3>";

    // Primer Curso
    echo "<h4><span class='primero-segundo'>Primero:</span></h4>";
    echo "<table class='table-modulos-primero'>";
    echo "<tr class='cabecera'>
        <th><i class='fas fa-book-open'></i> Módulo</th>
        <th><i class='fas fa-clock'></i> Horas</th>
    </tr>";
    foreach($modulos_primero as $modulo){
        $cod_modulo = $modulo['codigo'];
        @$obs_modulo = $obs[$cod_modulo]['observaciones'];

        // Convertimos el array de observaciones de módulos en un string separado por comas
        $str_modulo = $obs_modulo ? "<span class='obs-modulo'>(".implode(', ',$obs_modulo).")</span>" : "" ;
        echo "<tr cod='$cod_modulo' class='modulo'>";
        echo "<td>$modulo[nombre] $str_modulo </td>";
        echo "<td class='horas-modulo'>$modulo[horas] h</td>";
        echo "</tr>";
    }
    echo "</table>";

    // Segundo Curso
    echo "<h4><span class='primero-segundo'>Segundo:</span></h4>";
    echo "<table class='table-modulos-segundo'>";
    echo "<tr class='cabecera'>
        <th><i class='fas fa-book-open'></i> Módulo</th>
        <th><i class='fas fa-clock'></i> Horas</th>
    </tr>";
    foreach($modulos_segundo as $modulo){
        echo "<tr cod='$modulo[codigo]' class='modulo'>";
        echo "<td>$modulo[nombre] </td>";
        echo "<td class='horas-modulo'>$modulo[horas] h</td>";
        echo "</tr>";
    }
    echo "</table>";

}
function imprimir_descripcion_ciclo($descripcion) {
    echo '<div class="descripcion">';
    echo "<p class='des-title'>Descripcion: </p>";
    echo "<p class='des-content'>$descripcion</p>";
    echo '</div>';
}
function imprimir_temario_ciclo($temario, $mid_width = FALSE) {
    $mid_width_class = $mid_width ? 'mid-width' : '';
    echo "<div class='temario $mid_width_class'>";
    echo "<p class='tem-title'>Temario: </p>";
    echo "<ul class='tem-list'>";
    foreach($temario as $tema) {
        echo "<li>$tema</li>";
    }
    echo '</ul>';
    echo '</div>';

}
function imprimir_observaciones_ciclo($observaciones, $mid_width = FALSE) {
    $mid_width_class = $mid_width ? 'mid-width' : '';
    echo "<div class='observaciones $mid_width_class'>";
    echo "<p class='obs-title'>Observaciones: </p>";
    echo "<ul class='obs-list'>";
    foreach($observaciones as $obser) {
        echo "<li>$obser</li>";
    }
    echo '</ul>';
    echo '</div>';

}
function imprimir_observaciones_familia($observaciones) {
    if ($observaciones)
    foreach($observaciones as $obser) {
        echo "<div class='obs-familia'>$obser";
        echo "</div>";
    }

}
function get_observaciones($codigo, $tipo_dato) {
    global $obs;
    @$observaciones = $obs[$codigo][$tipo_dato];
    return $observaciones;
}

function ciclo_es_superior($ciclo) {
    return strtolower($ciclo['tipo']) === 'superior';
}

function imprimirCiclos($familia_in) {
    echo "<button id='clean-familia'>Quitar filtros</button>";
    global $ciclo;
    global $familia;

    echo "<div id='lista-ciclos'>";
    //print '<pre>'.print_r($ciclo[$familia],true).'</pre>';

    $ciclos_medios = array_filter($ciclo[$familia_in], 'ciclo_es_medio');
    $ciclos_superiores = array_filter($ciclo[$familia_in], 'ciclo_es_superior');
    $titulo_familia = $familia[$familia_in]['titulo'];
    $logo_familia = $familia[$familia_in]['img'];

    // Diseño: hacer del titulo de familia un desplegable para las familias
    echo  "<div class='familia-logo'><img alt='thumb-familia' class='thumb-familia' src=$logo_familia></div>";
    echo "<h2>$titulo_familia</h2>";
    $observaciones = get_observaciones($familia_in, 'observaciones');

    imprimir_observaciones_familia($observaciones);

    // Ciclos medios
    if(empty($ciclos_medios) != 1) {
        echo "<div id='ciclos_medios'>";
        echo "<h3 class='title-medios'>Ciclos medios</h3>";
        echo "<ul class='ciclos-list'>";
        foreach($ciclos_medios as $ciclo) {
            imprimir_datos_ciclo($ciclo);
        }
        echo '</ul>';
        echo "</div>";
    }

    // Ciclos superiores
    if(empty($ciclos_superiores) != 1) {
        echo "<div id='ciclos_superiores'>";
        echo "<h3 class='title-superiores'>Ciclos superiores</h3>";
        foreach($ciclos_superiores as $ciclo) {
            imprimir_datos_ciclo($ciclo);
        }
        echo "</div>";
    }

    echo "</div>";


}
function controles_ciclos($cod_familia_selected) {
    global $familia;

        echo "<select id='select-familia'>\n";
    foreach($familia as $cod_familia => $nombre_familia ) {
        // If this family is where we come from we select it in the drop-down list
        $selected = $cod_familia === $cod_familia_selected ? 'selected' : '';
        echo "\t<option value='$cod_familia' $selected>";

        echo "$nombre_familia[titulo]</option>\n";
    }
        echo "</select>\n";
}
function print_faq_box() {
    global $faq;
    for($arg_no=0;$arg_no<func_num_args();$arg_no++) {
        $category = func_get_arg($arg_no);

        $faq_category = $faq[$category];

        print_faq($category, $faq_category);

        //echo '<hr style="border: 2px solid white">';
    }
}
function print_faq($category, $faq_category) {
    //global $faq;
    foreach($faq_category as $pregunta) {
        echo '<div>';
        echo "<h3 class='faq-type-title'>Modalidad: $category</h3>";
        echo '<p class="title-pregunta">Pregunta <i class="fas fa-question-circle"></i> </p>';
        echo "<p class='pregunta'>$pregunta[pregunta]</p>";
        echo '<p class="title-respuesta">Respuesta <i class="fas fa-check"></i></p>';
        echo "<p class='respuesta'>$pregunta[respuesta]</p>";
        echo '</div>';
    }

}
