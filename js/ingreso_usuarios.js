function delete_user(users)
{
	

		if(confirm('Desea eliminar el usuario seleccionado?'))
		{	

			$.post('eliminar_usuarios.php',{

					condition: users

				},

				function(data){

						   ver_comentarios();

				}

			);
		}
}


function edit_usuario(user){
 
  $.get('xml_usuarios.php?ocul='+user,{
    type: 'xml'
  },
  function(xml){
	 $("#nombre").val($(xml).find('nombre').text());
	 $("#apellido").val($(xml).find('apellido').text());
	 $("#nick").val($(xml).find('nick').text());
	 $("#email").val($(xml).find('correo').text());
	 $("#tipo").val($(xml).find('tipo').text());
	 $("#perfil").val($(xml).find('perfil').text());
	 $("#estado").val($(xml).find('estado').text());
	 $("#ocul").val($(xml).find('id').text());
	$("#guardar").val('Actualizar');
	 

	}
  );
}
function ver_comentarios(){
 $("#reccom").load("sacar_usuarios.php",function(){
	$(this).fadeIn("medium");
  });
}

function ingresar_usuarios(){
		 
   if($("#nombre").val()=='')
   {
     alert('El campo nombre es obligatorio.');
   }
   else
   {
   	 if($("#apellido").val()=='')
   	 {
        alert('El campo apellido es obligatorio.');
   	 }
   	 else
   	 {
   	 	  if($("#nick").val()=='')
		   	 {
		        alert('El campo usuario es obligatorio.');
		   	 }
		   	 else
		   	 {
		   	 	 if($("#password").val()=='' && $("#ocul").val()=='' )
				   	 {
				        alert('El campo password es obligatorio.');
				   	 }
				   	 else
				   	 {
				   	   if($("#email").val()=='')
					   	 {
					        alert('El campo correo es obligatorio.');
					   	 }	
					   	 else
					   	 {
					   	 	 if($("#tipo").val()=='0')
					   	 	 {
                                alert('El campo Tipo de usuario es obligatorio.');
					   	 	 }
					   	 	 else
					   	 	 {
					   	 	 	   if($("#perfil").val()=='0' )
							   	 	 {
		                                alert('El campo Perfil de usuario es obligatorio.');
							   	 	 }
							   	 	 else
							   	 	 {
                                        if($("#perfil").val()!='5' && $("#tipo").val()=='1'  )
                                        {
                                          alert('Si el tipo de usuario es administrador, debe escoger pefil de administrador.');
                                        }
                                        else
                                        {
                                        	if($("#perfil").val()=='5' && $("#tipo").val()!='1' )
                                        	{
                                               alert('Si el tipo de usuario  no es administrador, no puede escoger perfil de usuario administrador.');
                                        	}
                                        	else
                                        	{
                                        		if($("#estado").val()=='0')
				                                        {
				                                         alert("El campo Estado de usuario es obligatorio.");	
				                                        }
				                                        else
				                                        {
				                                        	var form= $("#ingreso").serialize();
				                                        	$.post('guarda_usuarios.php',form,
																	function(data){
																			 alert(data);
                                                                            																			 
                                                                                if($("#ocul").val()=='')
                                                                                {
																					 if(jQuery.trim(data)=='Usuario Ingresado Exitosamente.')
																					 {
																					    $("#nombre").val('');
																	     	            $("#apellido").val('');
																						$("#nick").val('');
																						$("#password").val('');
																						$("#email").val('');
																						$("#tipo").val('0');
																						$("#perfil").val('0');
																						$("#estado").val('0');
																						
																					   ver_comentarios();

																					 }
																			    }
																			    else
																			    {
																			        if(jQuery.trim(data)=='Usuario actalizado exitosamente.')
																					 {
																					    $("#nombre").val('');
																	     	            $("#apellido").val('');
																						$("#nick").val('');
																						$("#password").val('');
																						$("#email").val('');
																						$("#tipo").val('0');
																						$("#perfil").val('0');
																						$("#estado").val('0');
																						
																					   ver_comentarios();
																					   $("#guardar").val('Enviar');

																					 }
																			    }		 
																	}
																);	  


				                                        }

                                        	}
                                        }
                    
                                        
							   	 	 }
					   	 	 }
					   	 }
				   	 }
		   	 }
   	 }
   }


		
}


$(document).ready(function(){
 	 ver_comentarios();
});
 
//pendiente: eliminar y listo



