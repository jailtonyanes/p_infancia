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
       
        
  
  $array[0] = "'$_POST[nombre]','$_POST[apellido]','$_POST[password]','$_POST[nick]','$_POST[perfil]','$_POST[tipo_usuario]','$_POST[activo_usuario]'";

$campos="usuario_nombre,usuario_apellido,usuario_password,usuario_nick,usuario_tipo,usuario_perfil,usuario_active";
$tabla= "usuario";
$crud->insertar($array,$campos,$tabla,$con->getConection(),'Usuario guardado exitosamente.');
  

  $con-> desconectar();
?>
 