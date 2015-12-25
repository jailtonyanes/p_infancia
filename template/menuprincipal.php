<?php
$grado="";
if(isset($_GET['prog']))
{
	  if($_GET['prog']=='1')
	  {
	   $grado="(Jard&iacute;n)";
	  }
	  else
	   {
	      if($_GET['prog']=='2')
	      {
	     $grado="(Pre-jard&iacute;n)";
	      }
	     else
	      {
	        if($_GET['prog']=='3')
           
			    {
			     $grado="(P&aacute;rvulo)";
			    }
			    else
			    {
			       $grado="(Transici&oacute;n)"; 
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

