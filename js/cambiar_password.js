

function cambiar_password(){
		 
             if($("#usuario").val()=='')
             {             	
                 alert('El campo usuario es obligatorio.');
                          
             }
             else
             {
                  if($("#passwordd").val()=='')
                  {
                    alert('El campo contrase\u00f1a  es obligatorio.');
                  }
                  else
                  {
                  	 	if($("#nueva_contra").val()=='')
                  	 	{
                            alert('El campo nueva contrase\u00f1a es obligatorio.');
                  	 	}
                  	 	else
                  	 	{
                  	 		 if($("#confi_password").val()=='')
                  	 		{
                               alert('El campo confirme nueva contrase\u00f1a es obligatorio.');
                  	 		}
                  	 		else
                  	 		{
                  	 			if($("#nueva_contra").val()!= $("#confi_password").val())
                  	 			{
                                   alert('Los campos de la nueva contrase\u00f1a no coinciden.');
                  	 			}
                  	 			else
                  	 			{
                  	 				var form= $("#password").serialize();
				            $.post('cambio.php',form,
						function(data){
								 alert(data);
                                
										 if(jQuery.trim(data)=='Clave cambiada Exitosamente.')
										 {
										    
						     	            $("#usuario").val('');
											$("#passwordd").val('');
											$("#nueva_contra").val('');
											$("#confi_password").val('');
										
										 }
								   
						              });	
                  	 			}
                  	 		}
                  	 	}
                  }
             }

		
}


$(document).ready(function(){
 	 //ver_comentarios();
});
 
//pendiente: eliminar y listo



