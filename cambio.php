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
 $crud2 = new Crud();
?>
<?php 
     
    //verifico si hay o no un usuario con ese nick
        $crud2->setConsulta(" SELECT * from usuario WHERE usuario_nick ='$_POST[usuario]' and usuario_password = '$_POST[passwordd]' and usuario_active='1'");
    $datos1 = $crud2->seleccionar($con->getConection());

    if($crud2->getTuplas()>0)
    {
       $crud->update("update usuario set usuario_password = '$_POST[confi_password]' where usuario_nick = '$_POST[usuario]' ","Clave cambiada Exitosamente.",$con->getConection());
    }
   else
     {
        echo'Verifique los datos ingresados.';
     }

    

  $con-> desconectar();
 ?>

 



