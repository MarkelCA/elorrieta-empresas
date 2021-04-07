<?php
/*
Al final cuando queremos generar las páginas a partir de datos siempre ocurre lo mismo:

En alguno de esos datos quetemos escribir algo más (llamémoslo observación) y no se puede. 
Además suele pasar que no queremos modificar los datos.

Una posibilidad es usar un array de observaciones.

Como los códigos son tan distintos entre sí, podemos poner todas juntas.

Por ejemplo
*/

/*
Observación a nivel de familia.
*/

$obs['IN'][]='La familia que mejor se coloca';

/*
Solo podemos hacer una por familia. Si no habría que meter un array en plan:

$obs['IN'][]='La familia que mejor se coloca';

$obs['IN'][]='Y la que más mola';

*/

/*
Observación a nivel de ciclo
*/

$obs['ADAF3'][]='Observación de prueba para devel';
$obs['ADAF3'][]='Otra observación  más de prueba para devel';
$obs['INDW3'][]='Este ciclo se imparte en turno de tarde';
$obs['INAR3'][]='Este ciclo se imparte en trilingüe en turno de mañana y en castellano en turno de tarde';
/*
Observación a nivel de módulo
*/
$obs['0373'][]='Módulo común a los tres ciclos superiores de informática';

/*
Seria recomendable no andar escribiendo cajas vacías donde no haya observaciones.

*/

header('Content-Type: text/html; charset=utf-8');
//print "<pre>\n".print_r($obs,true)."</pre>";

?>
