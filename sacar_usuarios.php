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
                            
                            <td >Acción</td>
                            
                            
                            
                        </tr>
  <?php
   $crud->setConsulta("SELECT usuario_id, usuario_nombre, usuario_apellido,usuario_nick,usuario_tipo,usuario_active,usuario_perfil,usuario_correo FROM usuario
ORDER BY usuario_nombre ASC, usuario_apellido ASC");
   $datos1 = $crud->seleccionar($con->getConection());
   $i=0;
   while ($i<sizeof($datos1))
   {   
     //estado de los usuarios
       $estado="";
        if($datos1[$i]['usuario_active']=='1')
      {
       $estado="Activo";
      }
      else
      {
          $estado="Inactivo";
      }

    //  fin de estado de los usuarios

     //filtrado de tipos
      $tipo="";
      if($datos1[$i]['usuario_tipo']=='1')
      {
       $tipo="Administrador";
      }
      else
      {
        if($datos1[$i]['usuario_tipo']=='2')
        {
         $tipo="Padre";
        }
        else
        {
           $tipo="Profesor";
        } 
      }
//fin filtrado de tipos
//perfil de usuarios
      $perfil="";
      if($datos1[$i]['usuario_perfil']=='1')
      {
       $perfil="Jardín";
      }
      else
      {
        if($datos1[$i]['usuario_perfil']=='2')
        {
         $perfil="Párvulo";
        }
        else
        {
          if($datos1[$i]['usuario_perfil']=='3')
            {
             $perfil="Pre-jardín";
            }
            else
            {
              if($datos1[$i]['usuario_perfil']=='4')
              {
                $perfil="Transición"; 
              }
              else
              {
                 $perfil="Administrador";  
              } 
            }   
        }  

      }
//fin perfil de usuarios      

  ?>
  <tr>
                            <td><?php echo $datos1[$i]['usuario_nombre'] ?></td>
                            <td><?php echo $datos1[$i]['usuario_apellido'] ?></td>
                            <td><?php echo $datos1[$i]['usuario_nick'] ?></td>
                              <td><?php echo $datos1[$i]['usuario_correo'] ?></td>
                            
                              <td><?php echo $tipo ?></td>
                            <td><?php echo $estado?></td>
                            <td><?php echo $perfil ?></td>
                                               <td><a style="cursor:pointer" ><img src="img/edit.png" onclick="edit_usuario(<?php echo $datos1[$i]['usuario_id']?>)" height="20" width="20" title="Editar"></a><a style="cursor:pointer" ><img src="img/eliminar.png" height="20" width="20" onclick="delete_user(<?php echo $datos1[$i]['usuario_id']?>)" title="Eliminar"></a></td>
                        </tr>
  <?php
	  $i++;
	 }
  ?>
  </tbody>
 

 



