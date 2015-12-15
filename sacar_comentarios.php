<?php
 include('_include/configuration.php');
 include('_classes/conectar.php');
 include('_classes/crud.php'); 
 session_start();
 $con = new Coneccion($server,$user,$password,$dbname);
 $con->conectar();
 $crud = new Crud();  
?>
<tbody>
                        <tr>
                            <td>Tipo de comentario</td>
                            <td>Descripción</td>
                            <td>Fecha</td>
                        </tr>
  <?php
   $crud->setConsulta("SELECT tipo_comentario,descripcion,fecha
     FROM comentarios c ORDER BY fecha DESC ");
   $datos1 = $crud->seleccionar($con->getConection());
   $i=0;
   while ($i<sizeof($datos1))
   {   
  ?>
  <tr>
                            <td><?php echo $datos1[$i]['tipo_comentario'] ?></td>
                            <td><?php echo $datos1[$i]['descripcion'] ?></td>
                            <td><?php echo $datos1[$i]['fecha'] ?></td>
                        </tr>
  <?php
	  $i++;
	 }
  ?>
  </tbody>
 

 



