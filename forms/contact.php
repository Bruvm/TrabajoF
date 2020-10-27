<?php
require("class.phpmailer.php");
require("class.smtp.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to

$mail->Host = "mail.metrolink.com.ar";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "melibruvera@hotmail.com";  // SMTP username
$mail->Password = "homero19"; // SMTP password

$mail->From = "melibruvera@hotmail.com";
$mail->FromName = "Contacto desde Web [".$email."]";        // remitente
$mail->AddAddress("melibruvera@hotmail.com", "destinatario");        // destinatario

$mail->AddReplyTo("melibruvera@hotmail.com", "respuesta a");    // responder a

$mail->WordWrap = 50;     // set word wrap to 50 characters
$mail->IsHTML(true);     // set email


$nombre = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$cuerpoEmail="Nombre: " .$nombre;
$cuerpoEmail.="<br>Email: " .$email;
$cuerpoEmail.="<br>Asunto: " .$subject;
$cuerpoEmail.="<br>Mensaje: " .$message ;



$mail->Subject = $subject;
$mail->Body    = $cuerpoEmail;
$mail->AltBody = $cuerpoEmail;
if(!$mail->Send())
{
   echo "Hubo un error, vuelva a intentar";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}else{
  echo "se envio";
}
//header("location:../contacto.html");
//echo "El formulario fue enviado";
//if("location:../contacto.html"){

//}

?> 