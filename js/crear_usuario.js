function ver_comentarios(){
 $("#reccom").load("sacar_usuario.php",function(){
	$(this).fadeIn("medium");
  });
}
function ingresar_usuario(){

  
      var form= $("#ingreso_usuario").serialize();
    $.post('guardar_usuario.php',form,
    function(data){
      alert(data);
     if(jQuery.trim(data)=='Usuario guardado exitosamente.'){
      // location.reload();
        ver_comentarios();
         
                     // $("#edit_cli").fadeOut("medium");    
     } 
    },{
    }
    );
}


$(document).ready(function(){
 	 ver_comentarios()
});
 
//pendiente: eliminar y listo



