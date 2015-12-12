<?php
$grado="";
if(isset($_GET['uid']))
{
	  if($_GET['uid']=='1')
	  {
	   $grado="(Jardín)";
	  }
	  else
	   {
	      if($_GET['uid']=='2')
	      {
	     $grado="(Pre-jardín)";
	      }
	     else
	      {
	        if($_GET['uid']=='3')
           
			    {
			     $grado="(Párvulo)";
			    }
			    else
			    {
			       $grado="(Transición)"; 
			    }
	      }
	   }
}
else
{
 $grado='';
}
?>

<li><a href='index.php'><span>Programa de educacion preescolar <?php echo $grado ?></span></a></li>
<!-- <li><a href='p_parvulo.php'>Párvulo</a></li>
<li class='selected'><a href='p_prejardin.php'>Pre-jardin</a></li>
<li><a href='p_jardin.php'>jardin</a></li>
<li><a href='p_transicion.php'>Transición</a></li> -->

