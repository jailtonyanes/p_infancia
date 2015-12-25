
function redirecto(proyecto,unidad,unidad_integrada)
{
  window.location.href = 'video.php?proyecto='+proyecto+'&unidad='+unidad+'&unidad_integrada='+unidad_integrada;
}

// JavaScript Document

//cuerpo del jquery, aqí se llaman todas las funciones y procedimientos
function enviar_url(x1,x2,y1,y2,url,posx,posy,sw)
{
    if((posx>=x1 && posx <= x2)&&(posy >= y1 && posy <= y2 ))
    {
    	window.location.href = url;
    }
    else
    {
    	sw=1;
    	//alert(sw);
    }

}

$(document).ready(function(){
 
   /* $("#header-outer").bind( "click", function() {
      alert( "User clicked on 'foo.'" );
    });
*/
  var sw =0;
  $("#header-outer").click(function(e){
     var pos = $(this).offset();
     var posX = (e.pageX - pos.left);
     var posY = (e.pageY - pos.top);
     
    if(posX>=137 && posX<=244 && posY>=134 && posY <=204)
    {
     window.location.href='p_jardin.php?prog='+1;
    }
    else
    {
      if(posX>=301 && posX<=430 && posY>=178 && posY <=287)
       {
         window.location.href='p_prejardin.php?prog='+2;  	
       }
       else
       {
         if(posX>=436 && posX<=537 && posY>=213 && posY <=288)
         {
          window.location.href='p_parvulo.php?prog='+3;  	
         }	
         else
         {
         	if(posX>=531 && posX<=633 && posY>=102 && posY <=197)
	         {
	          window.location.href='p_transicion.php?prog='+4;  	
	         }
         }
       }	
    }
     //  
     //enviar_url(301,430,178,287,'p_prejardin.php',posX,posY,sw); 	 
       
  });

  
});

 









