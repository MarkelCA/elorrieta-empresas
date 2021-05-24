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

/////////////////////////////////////////////////
$obs['AD']['observaciones'][]='Observacion de familia 1';
$obs['AD']['observaciones'][]='Consectetur tenetur dolor reprehenderit ratione accusantium? Repellendus sapiente quasi et maiores consectetur culpa Dolore rerum delectus debitis suscipit libero deleniti. Tenetur explicabo et impedit velit rem repudiandae sint? Vel illo?';
//Solo podemos hacer una por familia. Si no habría que meter un array en plan:
$obs['IN']['observaciones'][]='La familia que mejor se coloca';
$obs['IN']['observaciones'][]='Y la que más mola';

/*
Observación a nivel de ciclo
*/
/////////////////////////////////////////////////
$obs['ADAF3']['observaciones'][]='Observación de prueba para devel';
$obs['ADAF3']['observaciones'][]='Otra observación  más de prueba para devel';
$obs['ADAF3']['temario'][]='CSS';
$obs['ADAF3']['temario'][]='JS';
$obs['ADAF3']['temario'][]='HTML';
$obs['ADAF3']['descripcion']='Dolor assumenda iure cupiditate natus vero? Dolore exercitationem magnam reiciendis non nam ad! Accusamus tenetur eveniet debitis culpa quod? Suscipit enim molestiae consequatur molestias totam? Eligendi ipsam soluta eum ea.';
/////////////////////////////////////////////////
$obs['ADAD3']['descripcion']='Dolor assumenda iure cupiditate natus vero? Dolore exercitationem magnam reiciendis non nam ad! Accusamus tenetur eveniet debitis culpa quod? Suscipit enim molestiae consequatur molestias totam? Eligendi ipsam soluta eum ea.';
/////////////////////////////////////////////////
$obs['INDW3']['observaciones'][]='Este ciclo se imparte en turno de tarde';
/////////////////////////////////////////////////
$obs['INAR3']['observaciones'][]='Este ciclo se imparte en trilingüe en turno de mañana y en castellano en turno de tarde';
////////////////////////////////////////////////
$obs['CMAC2']['observaciones'][]='Observacion de test 1';
$obs['CMAC2']['temario'][]='Temario de test 1';
////////////////////////////////////////////////
$obs['CMCI3']['descripcion']='Descripcion de test 1';

/*
Observación a nivel de módulo
*/
$obs['0373']['observaciones'][]='Módulo común a los tres ciclos superiores de informática';

/*
Seria recomendable no andar escribiendo cajas vacías donde no haya observaciones.

*/

header('Content-Type: text/html; charset=utf-8');
//print "<pre>\n".print_r($obs,true)."</pre>";

?>
