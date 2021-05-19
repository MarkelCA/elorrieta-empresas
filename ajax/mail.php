<?php 
if(isset($_POST['submit'])){ 
    $to = "markel1481@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['nombre'];
    $subject = "Enviado desde Elorrieta Empresas";
    $subject2 = $subject;
    $message_destinatary = $first_name . " wrote the following:" . "\n\n" . $_POST['mensaje'];
    $message_copy_sender = "Copia de: ".$message_destinatary;

    $header_destinatary = "From:" . $from;
    $header_copy_sender = $header_destinatary;
    //$sent = mail($to,$subject,$message_destinatary,$header_destinatary);
    $sent = mail('markel1481@gmail.com','Subject','msg');
    echo 'Enviado: ';
    var_dump($sent);
    //mail($from,$subject2,$message_copy_sender,$header_copy_sender); // sends a copy of the message to the sender
    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
else {
    echo 'mala suerte bru';
}
