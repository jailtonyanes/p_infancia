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
                            <td>Nombre</td>
                            <td>Apellido</td>
                            <td>Usuario</td>
                            <td>Correo</td>
                            
                            <td>Tipo</td>
                            <td>Estado</td>
                            <td>Perfil</td>
                            <td>Acciones</td>
                        </tr>
  <?php
   $crud->setConsulta("SELECT  usuario_id,usuario_nombre,usuario_apellido,usuario_nick,usuario_tipo,usuario_active,usuario_perfil
 FROM usuario ORDER BY usuario_apellido ASC, usuario_nombre ASC");
   $datos1 = $crud->seleccionar($con->getConection());
   $i=0;
   while ($i<sizeof($datos1))
   {   
  ?>
  <tr>
                            <td><?php echo $datos1[$i]['usuario_nombre'] ?></td>
                            <td><?php echo $datos1[$i]['usuario_apellido'] ?></td>
                            <td><?php echo $datos1[$i]['usuario_nick'] ?></td>
                            <td><?php echo $datos1[$i]['usuario_correo'] ?></td>
                            
                            <td><?php echo $datos1[$i]['usuario_tipo'] ?></td>
                            <td><?php echo $datos1[$i]['usuario_active'] ?></td>
                            <td><?php echo $datos1[$i]['usuario_perfil'] ?></td>
                            <td><a href=""><img src="img/edit.png" height="20" width="20"></a><a href=""><img src="img/eliminar.png" height="20" width="20"></a></td>

                        </tr>
  <?php
	  $i++;
	 }
  ?>
  </tbody>
 

 



