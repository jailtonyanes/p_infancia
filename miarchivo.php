<?php	
	$pic = $_FILES['pic'];
	$data = array('success' => false);
	
	//Validamos si la copio correctamente 
	if(copy($pic['tmp_name'],'pdf/'.$pic['name'])){
		$data = array('success' => true);
	}
	
	//Codificamos el array a JSON (Esta sera la respuesta AJAX) 
	echo json_encode($data);
?>	
