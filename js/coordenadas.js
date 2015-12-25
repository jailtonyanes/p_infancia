
function sobre()
{
  alert('yox');
  //document.body.style.cursor = "url(favicon.ico)";
  //alert($.cursor("position"));
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
  
        


  var sw =0;
  $("#header-outer").click(function(e){
     var pos = $(this).offset();
     var posX = (e.pageX - pos.left);
     var posY = (e.pageY - pos.top);
     /*alert (posX+' '+posY);*/
     
    if(posX>=137 && posX<=244 && posY>=134 && posY <=204)
    {
     window.location.href='p_jardin.php?prog='+1;
     
    }
    else
    {
      if(posX>=397 && posX<=534 && posY>=196 && posY <=292)
       {
         window.location.href='p_parvulo.php?prog='+3;

       }
       else
       {
         if(posX>=529 && posX<=663 && posY>=98 && posY <=194)
         {
            window.location.href='p_transicion.php?prog='+4; 	
         }	
         else
         {
         	if(posX>=703 && posX<=837 && posY>=107 && posY <=196)
	         {
	           	  window.location.href='p_prejardin.php?prog='+2;    
	         }
         }
       }	
    }
     //  
     //enviar_url(301,430,178,287,'p_prejardin.php',posX,posY,sw); 	 
       
  });

  
});

 









