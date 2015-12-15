function ver_comentarios(){
 $("#reccom").load("sacar_comentarios.php",function(){
	$(this).fadeIn("medium");
  });
}


$(document).ready(function(){
 	 ver_comentarios()
});
 
//pendiente: eliminar y listo



