function cambio_url(id,num_url,c){
	
       if(confirm('Desea cambiar el video actual?'))
          {
          var cambio= $("#cambio"+id).val();
	$.post('actualizar_url.php',{

						url_id: id,
						urlnum: num_url,
						contenido:cambio

					},

					function(data){

							window.location.reload(); 

					}

				);
          }
}


$(document).ready(function(){
 	// ver_comentarios()
});
 
//pendiente: eliminar y listo



