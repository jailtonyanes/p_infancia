<!-- Sidebar -->
<div id='sidebar-wrapper-right'>
<div class='sidebar2 section' id='sidebar2'><div class='widget PopularPosts' id='PopularPosts1'>
<h2>Ingreso de usuarios</h2>
<div class='widget-content popular-posts'>
    <form id="login" name="login" method="post" action=" " class="post2">
         <p>
         <label for="usuario">Usuario</label>
         <br /> 
           <input type="text" name="usuario" id="usuario" />
        
       </p>
       <p>
         <label for="password">Contrase&ntilde;a </label>
         <br />
           <input type="password" name="password" id="password" />
        
       </p>
       <p>
         <label>
           <input type="submit" name="login2" id="login2" value="Entrar" />
         </label>
       </p>
      
    </form>

</div>
</div></div>
</div>
<!-- spacer for skins that want sidebar and main to be the same height-->
<!-- actos!-->
<div id='sidebar-wrapper-right'>
<div class='sidebar2 section' id='sidebar3'><div class='widget PopularPosts' id='PopularPosts2'>
<h2>Actos administrativos</h2>
<div class='widget-content popular-posts'>
      <ul>
          
<?php
   $crud2 = new Crud();
   $crud2->setConsulta("SELECT ruta_url,ruta_descrip FROM ruta ORDER BY ruta_id ASC");
   $datos1 = $crud2->seleccionar($con->getConection());
   $i=0;
   while ($i<sizeof($datos1))
   {
?>
          <li><a href="<?php echo $datos1[$i]['ruta_url'] ?>"><?php echo $datos1[$i]['ruta_descrip'] ?></a></li>
        
     <?php
       $i++;
    }
     
 $con->desconectar();
     ?>

      </ul>

</div>
</div></div>
</div>
<!-- actos!-->
<!-- PQR!-->
<div id='sidebar-wrapper-right'>
<div class='sidebar2 section' id='sidebar3'><div class='widget PopularPosts' id='PopularPosts2'>
<h2>Ayúdanos a mejorar</h2>
<div class='widget-content popular-posts'>
    <form id="comentario" name="comentario" method="post" action=" " class="post2">
        
         <label for="usuario">Quiero expresar una:</label>
         <br /> 
           <select name="asunto" id="asunto" class="select">
             <option selected="selected" value="Felicitacion">Felicitación</option>
             <option value="Sugerencia">Sugerencia</option>
             <option value="No conformidad">No conformidad</option>
           </select> 
        
     
     <br />
     <br />
    
     <label for="coment">Escribe tu comentario</label>
         <br />
            <textarea rows="4" cols="21" id="mensaje" name="mensaje">

</textarea> 
        
    
       <p style="padding-left:63px">
         <label>
           <input type="button" name="pqr" id="pqr" value="Enviar" onclick="javascript:ingresar_comentarios()" />
         </label>
       </p>
      
    </form>

</div>
</div></div>
</div>
<!-- PQR!-->
