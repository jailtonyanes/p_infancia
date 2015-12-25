
<!-- Sidebar -->
<div id='sidebar-wrapper-right'>
<div class='sidebar2 section' id='sidebar2'><div class='widget PopularPosts' id='PopularPosts1'>
<h2>Panel de Control</h2>

 <?php
    $bienvenido='';
    if($_SESSION['tipo']=='2')
    {
      $bienvenido =' Padre/Madre de familia ';
    }
    else
    {
        if($_SESSION['tipo']=='3')
        {
               $bienvenido =' Profesor(a) '; 
        }
    
    }
 ?>
    <h3>Bienvenido(a) <?php echo $bienvenido. $_SESSION['nombre'].' '.$_SESSION['apellido'] ?></h3>
        <a href="destroy.php">Salir</a>

</div></div>
</div>
<!-- spacer for skins that want sidebar and main to be the same height-->
<!-- PQR!-->
<div id='sidebar-wrapper-right'>
    <div class='sidebar2 section' id='sidebar3'>
        <div class='widget PopularPosts' id='PopularPosts2'>
            <h2>Men&uacute; Principal</h2>
            <div class='widget-content popular-posts'>
                 <ul>
                    <?php
                      if($_SESSION['tipo']==1)
                      {


                    ?>
                    <li><a href="ingreso_usuarios.php">Ingreso de usuarios</a></li>
                    <li><a href="multi-upload/index.php">Subir Archivos  Administrativos</a></li>
                    <?php
                      }
                    ?>
                    <?php
                      if($_SESSION['tipo']==1 || ($_SESSION['tipo']!=1 && $_SESSION['perfil']==1) )
                      {
                    ?>
                    <li><a href="p_jardin.php?prog=1">Jardín</a></li>
                    <?php
                      }
                    ?>
                      <?php
                      if($_SESSION['tipo']==1 || ($_SESSION['tipo']!=1 && $_SESSION['perfil']==2) )
                      {
                    ?>
                    <li><a href="p_prejardin.php?prog=2">Pre-Jardín</a></li>
                     <?php
                      }
                    ?>
                       <?php
                      if($_SESSION['tipo']==1 || ($_SESSION['tipo']!=1 && $_SESSION['perfil']==3) )
                      {
                    ?>
                    <li><a href="p_parvulo.php?prog=3">Párvulo</a></li>
                    <?php
                      }
                    ?>
                        <?php
                      if($_SESSION['tipo']==1 || ($_SESSION['tipo']!=1 && $_SESSION['perfil']==4) )
                      {
                    ?>
                    <li><a href="p_transicion.php?prog=4">Transición</a></li>
                     <?php
                      }
                    ?>
                </ul>

                


            </div>
        </div>
    </div>
</div>

