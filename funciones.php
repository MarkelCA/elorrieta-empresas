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

function imprimirCiclos($familia) {
    controles_dropdown();
    echo "<button id='clean-familia'>Quitar filtros</button>";
    global $ciclo;
    print '<pre>'.print_r($ciclo[$familia],true).'</pre>';
}
function controles_dropdown() {
    global $familia;
        echo "<select id='select-familia'>\n";

    foreach($familia as $cod_familia => $nombre_familia ) {
        echo "\t<option value='$cod_familia'>$nombre_familia[titulo]</option>\n";
    }
        echo "</select>\n";
    
}

