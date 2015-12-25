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
     
  
     $crud->update("UPDATE contenido SET $_POST[urlnum] = '$_POST[contenido]' WHERE id = '$_POST[url_id]'","URl actulizada exitosamente.",$con->getConection());


  $con-> desconectar();
 ?>

 



