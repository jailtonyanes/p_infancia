<?php
  include('_include/configuration.php');
  $connection=mysql_connect($server,$user,$password);
  mysql_select_db($dbname);

$query = "select * from usuario  where usuario_id= '$_GET[ocul]'";
$result = mysql_query($query,$connection);
$row = mysql_fetch_array($result);

mysql_close($connection);

header('Content-Type: text/xml'); 
echo '<?xml version="1.0" encoding="iso-8859-1"?>
<user>
<id>'.$row['usuario_id'].'</id>
<nombre>'.$row['usuario_nombre'].'</nombre>
<apellido>'.$row['usuario_apellido'].'</apellido>
<nick>'.$row['usuario_nick'].'</nick>
<perfil>'.$row['usuario_perfil'].'</perfil>
<estado>'.$row['usuario_active'].'</estado>
<tipo>'.$row['usuario_tipo'].'</tipo>
<correo>'.$row['usuario_correo'].'</correo>


</user>';
?>