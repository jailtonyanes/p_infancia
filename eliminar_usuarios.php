<?php
 include('_include/configuration.php');
 include('_classes/conectar.php');
 include('_classes/crud.php'); 

 session_start();
 $con = new Coneccion($server,$user,$password,$dbname);
 $con->conectar();
 $crud = new Crud();  
?>
<?php
  
 $cadena = "usuario_id = '$_POST[condition]'";


$crud->eliminar("usuario",$con->getConection(),"$cadena","Usuario eliminado exitosamente.");

 $con->desconectar();

?>