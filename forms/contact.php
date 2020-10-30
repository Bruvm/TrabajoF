<?php
require("class.phpmailer.php");
require("class.smtp.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to

$mail->Host = 'no-reply@tuusuario.ferozo.com';  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = 'melibruvera@hotmail.com.ar';  // SMTP username
$mail->Password = 'homero19'; // SMTP password

$mail->From = 'prueba@metrolink.com.ar';
$mail->FromName = 'Contacto desde Web';        // remitente
$mail->AddAddress('melibruvera@hotmail.com.ar', 'destinatario');        // destinatario

$mail->AddReplyTo('melibruvera@hotmail.com.ar', 'respuesta a');    // responder a

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