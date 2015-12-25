<?php
//Librerías para el envío de mail
//Librerías para el envío de mail
include_once('class.phpmailer.php');
include_once('class.smtp.php');
 
//Recibir todos los parámetros del formulario
//$para = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
 
//Este bloque es importante
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
 
//Nuestra cuenta
$mail->Username ='sopordes.1@gmail.com';
$mail->Password = 'Marialadelbarrio10*'; //Su password

 
//Agregar destinatario
$mail->AddAddress("politecnicodemagangue@gmail.com");
$mail->Subject = $asunto;
$mail->Body = $mensaje;

 if($mail->Send())
{
    echo 'Comentario Ingresado Existosamente.';
}
else{
     echo $mail->ErrorInfo;
}




 


?>
