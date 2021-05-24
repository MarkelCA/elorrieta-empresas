<?php
// Estamos hablando básicamente de tener las FAQ en un array para poderlas modificar.
// Os propongo lo que a mí me parece más razonable pero estoy abierto a otras opciones

$faq['primero'][]=array(
  'pregunta'=>'¿Cuántas horas a la semana dedica a la empresa un alumno de primero?',
  'respuesta'=>'En general seis, divididas en dos o tres días'
);
$faq['primero'][]=array(
  'pregunta'=>'¿Es posible que el alumno en prácticas se incorpore a la empresa como trabajador?',
  'respuesta'=>'Lo razonable es que termine sus estudios. Una buena opción sería la formación dual'
);
$faq['primero'][]=array(
  'pregunta'=>'¿Cuánto hay que pagar al alumno?',
  'respuesta'=>'En esta modalidad el alumno no recibe dinero'
);

$faq['segundo'][]=array(
  'pregunta'=>'¿Pregunta de segundo 1`?',
  'respuesta'=>'Elit neque cum provident quae suscipit? Temporibus rem labore est nostrum consequuntur eius ullam quisquam, qui Excepturi et assumenda illum soluta placeat Quas molestias dolorem unde voluptatum natus tempore labore'
);
$faq['segundo'][]=array(
  'pregunta'=>'¿Pregunta de segundo 2?',
  'respuesta'=>'Adipisicing sit possimus quos explicabo aliquam porro Sint atque illum culpa sint amet a sunt In ipsa facere nobis repudiandae error? Unde veniam deserunt deleniti possimus aspernatur animi Sapiente autem'
  
);
$faq['FCT'][]=array(
  'pregunta'=>'¿Cuál es el periodo para realizar las prácticas?',
  'respuesta'=>'Normalmente a partir de primeros de marzo'
);
$faq['FCT'][]=array(
  'pregunta'=>'¿Cuántas horas pasa el alumno en la empresa?',
  'respuesta'=>'En ciclo superios 360 horas y en medio 380'
);
$faq['DUAL'][]=array(
  'pregunta'=>'¿Cómo se formaliza la relación del alumno con la empresa?',
  'respuesta'=>'Hay dos modalidades: un contrato en prácticas o una beca'
);
$faq['DUAL'][]=array(
  'pregunta'=>'¿Puede la empresa seleccionar alumnos?',
  'respuesta'=>'Teniendo en cuenta que les va a pagar, sí'
);
header('Content-Type: text/html; charset=utf-8');
//print "<pre>\n".print_r($faq,true)."</pre>";

?>
