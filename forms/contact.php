<?php
require("class.phpmailer.php");
require("class.smtp.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to

$mail->Host = 'c1960018.ferozo.com';  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = 'no-reply@c1960018.ferozo.com';  // SMTP username
$mail->Password = 'Tx0HyE*xhq'; // SMTP password

$mail->From = 'no-reply@c1960018.ferozo.com';
$mail->FromName = 'Contacto desde Web';        // remitente
$mail->AddAddress('no-reply@c1960018.ferozo.com', 'destinatario');        // destinatario

$mail->AddReplyTo('no-reply@c1960018.ferozo.com', 'respuesta a');    // responder a

$mail->WordWrap = 50;     // set word wrap to 50 characters
$mail->IsHTML(true);     // set email


$nombre = $_POST['name'];
$email = $_POST['email'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];

$cuerpoEmail='Nombre: ' .$nombre;
$cuerpoEmail.="<br>Email: " .$email;
$cuerpoEmail.="<br>Asunto: " .$asunto;
$cuerpoEmail.="<br>Mensaje: " .$mensaje;

$mail->Subject = 'Mensaje enviado desde la web';
$mail->Body    = $cuerpoEmail;
$mail->AltBody = $cuerpoEmail;
if(!$mail->Send())
{
   echo 'Hubo un error, vuelva a intentar';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}else{
	echo 'Su mensaje fue enviado correctamente. En breve nos comunicaremos contigo.';
}


?> 