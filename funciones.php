<?php
require_once 'datos/datos.php';


function imprimirFamilias() {
    global $ciclo;
    global $familia;

    foreach($ciclo as $familia_ciclo => $ciclo ) {
        echo "<a class='box'>\n";
        echo "<div codigo_familia='$familia_ciclo' class='familia'>\n";
        echo "<img alt='imagen-familia' src='{$familia[$familia_ciclo]['img']}' />\n";
        echo '<h3>',$familia[$familia_ciclo]['titulo'],"</h3>\n";
        echo "</div>\n";
        echo "</a>\n";
    }
    
}

function ciclo_es_medio($ciclo) {
    return strtolower($ciclo['tipo']) === 'medio';
}
function imprimir_datos_ciclo($ciclo) {
    echo "<h4>$ciclo[nombre]: $ciclo[horas] horas.</h4>";
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

    // Ciclos medios
    if(empty($ciclos_medios) != 1) {
        echo "<div id='ciclos_medios'>";
        echo "<h3>Ciclos medios</h3>";
        foreach($ciclos_medios as $ciclo) {
            imprimir_datos_ciclo($ciclo);
        }
        echo "</div>";
    }

    // Ciclos superiores
    if(empty($ciclos_superiores) != 1) {
        echo "<div id='ciclos_superiores'>";
        echo "<h3>Ciclos superiores</h3>";
        foreach($ciclos_superiores as $ciclo) {
            imprimir_datos_ciclo($ciclo);
        }
        echo "</div>";
    }

    echo "</div>";

}
function controles_ciclos() {
    global $familia;
        echo "<select id='select-familia'>\n";

    foreach($familia as $cod_familia => $nombre_familia ) {
        echo "\t<option value='$cod_familia'>$nombre_familia[titulo]</option>\n";
    }
        echo "</select>\n";
    
}

