<?php
 include('../_include/configuration.php');
 include('../_classes/conectar.php');
 include('../_classes/crud.php');
  $con = new Coneccion($server,$user,$password,$dbname);
 $con->conectar();
 $crud = new Crud(); 
 $ruta = 'Files/'.$_POST['condition']; 
 $crud->update("update ruta set ruta_url = '$ruta' where ruta_id ='$_POST[condition2]'",'Actualizado con exito',$con->getConection());

?>