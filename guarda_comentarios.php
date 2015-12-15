<?php
   session_start();
   include('_include/configuration.php');
   include('_classes/conectar.php');
   include('_classes/crud.php');
   
  $con = new Coneccion($server,$user,$password,$dbname);
  $con->conectar();
  $crud = new Crud();

  $fecha = date('Y-m-d');   
        
  
  $array[0] = "'$_POST[tipo_com]','$_POST[coment]','$fecha'";

$campos="tipo_comentario,descripcion,fecha";
$tabla= "comentarios";
$crud->insertar($array,$campos,$tabla,$con->getConection(),'Comentario Ingresado Existosamente.');
  

  $con-> desconectar();
  
?>