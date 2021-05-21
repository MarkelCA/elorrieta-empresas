<?php

/* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/* Include the Composer generated autoload.php file. */
//require_once 'vendor/autoload.php';

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

echo !extension_loaded('openssl')?"Not Available<br>":"Available<br>";
try {
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->SMTPDebug = SMTP::DEBUG_CONNECTION;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'ssl://smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'markel1481@gmail.com';                     //SMTP username
    $mail->Password   = 'Gorasiberia.146';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    //$mail->Port       = 587;             
    $mail->Port       = 465;             

    //Recipients
    $mail->setFrom('markel1481@gmail.com', 'Mailer');
    $mail->addAddress('cuestaarribas.markel@gmail.com');     //Add a recipient
    $mail->addAddress('test-d5f26mavs@srv1.mail-tester.com', 'Test');     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    print_r(error_get_last());
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
