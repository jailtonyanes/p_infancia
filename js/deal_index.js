

//envía los datos via post cuando se van a ingresar
function ingresar_comentarios(){
  var mensaje='';
    if($("#asunto").val()=='Felicitacion')


    //envía los datos via post cuando se van a ingresar
    function ingresar_comentarios(){
      var mensaje='';
        if($("#tipo_com").val()=='felicitacion')
	>>>>>>> 29661a189729e06ae7b23c2b012876f8cb5b61fe
	  {
	      mensaje='Desea enviar una Felecitaci\u00F3n'; 
	        }		 
		  else
		    {

		         if($("#asunto").val()=='Sugerencia')

			 	  {
				  	    mensaje='Desea enviar una Sugerencia?'; 
					    	  }
						  	  else
							  	  {
								  	    mensaje='Desea enviar una No conformidad?';	
									    	  }
										    }

										      if(confirm(mensaje))
										        {
											  	 $("#pqr").val('Enviando...');
												    	 $("#pqr").attr('disabled', true);
													   	 var form= $("#comentario").serialize();

														 		  $.post('mailer/archivo_para_envio.php',form,

																  				function(data){
																									 	
																																 
																																 						 alert(data);
																																						 						 if(jQuery.trim(data)=='Comentario Ingresado Existosamente.')
																																												 			             {
																																																     			             	/* $("#save_asig").val('Guardar Programaci\u00f3n');
																																																					   		                    $("#save_asig").attr('disabled', false);
																																																									       						   */ $("#comentario")[0].reset();
																																																															      						   $("#pqr").val('Enviar');
																																																																					      	                       $("#pqr").attr('disabled', false);
																																																																								       			             }
																																																																												     						
																																																																																						}
																																																																																									);
																																																																																									  }

																																																																																									  		 
																																																																																											    
																																																																																											    }

																																																																																											    $(document).ready(function(){
																																																																																											     	 
																																																																																												 });
																																																																																												  
																																																																																												  //pendiente: eliminar y listo




