<?php
 include('_include/configuration.php');
 include('_classes/conectar.php');
 include('_classes/crud.php'); 
 include_once('mailer/class.phpmailer.php');
include_once('mailer/class.smtp.php');
 session_start();
 $con = new Coneccion($server,$user,$password,$dbname);
 $con->conectar();
 $crud = new Crud();  
?>
<?php 
     
   if($_POST['ocul']=='')
   {
     /* $array[0] = "'$_POST[nombre]','$_POST[apellido]','$_POST[nick]','$_POST[password]','$_POST[email]',
      '$_POST[tipo]','$_POST[estado]','$_POST[perfil]'";

      $campos="usuario_nombre,usuario_apellido,usuario_nick,usuario_password,usuario_correo,usuario_tipo,usuario_active,
      usuario_perfil";
      $tabla= "usuario";
      $crud->insertar($array,$campos,$tabla,$con->getConection(),'Usuario Ingresado Exitosamente.');

      //envío de correo
        //Recibir todos los parámetros del formulario
        */
//$para = $_POST['email'];
        $asunto = 'Usuario Creado';
        $mensaje = 'Señor (a) '.$_POST['nombre'].' '.$_POST['apellido'].', su usuario para ingresar al portal de la coroporación es: '.$_POST['nick'].' su contraseña provisional es: 1234 ingrese al portal y cámbiela.'
         ;
         
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
        $mail->AddAddress($_POST['email']);
        $mail->Subject = $asunto;
        $mail->Body = $mensaje;

         if($mail->Send())
        {
           $array[0] = "'$_POST[nombre]','$_POST[apellido]','$_POST[nick]','$_POST[password]','$_POST[email]',
      '$_POST[tipo]','$_POST[estado]','$_POST[perfil]'";

      $campos="usuario_nombre,usuario_apellido,usuario_nick,usuario_password,usuario_correo,usuario_tipo,usuario_active,
      usuario_perfil";
      $tabla= "usuario";
      $crud->insertar($array,$campos,$tabla,$con->getConection(),'Usuario Ingresado Exitosamente.');
        }
        else{
             echo $mail->ErrorInfo;
        }
      //fin envío de correo

   }
   else
   {
     $crud->update("update usuario set usuario_nombre = '$_POST[nombre]' ,usuario_apellido = '$_POST[apellido]',usuario_nick = '$_POST[nick]'
        ,usuario_correo = '$_POST[email]' ,usuario_tipo = '$_POST[tipo]',usuario_active = '$_POST[estado]',
      usuario_perfil = '$_POST[perfil]' where usuario_id = '$_POST[ocul]' ","Usuario actalizado exitosamente.",$con->getConection());
   }

  $con-> desconectar();
 ?>

 



