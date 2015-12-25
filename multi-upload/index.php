<!doctype html>
<html lang="es">
<head> <meta charset="UTF-8">
	<title>Subir archivos al servidor</title>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> <!-- Integramos jQuery-->
	<script src="script.js"></script> <!-- Integramos nuestro script que contendra nuestras funciones Javascript-->
	
	<!-- Creamos un estilo para nuestro documento -->
	<style type="text/css">
		body{
			font-size: 16px;
			text-align: center;
			width: 500px;
			margin: 0 auto;

		}
		.mensage{
			border:dashed 1px red;
			background-color:#FFC6C7;
			color: #000000;
			padding: 10px;
			text-align: left;
			margin: 10px auto; 
			display: none;//Al cargar el documento el contenido del mensaje debe estar oculto
		}
	</style>
	</head>
	<body>
		<h1>Carga de archivos al servidor</h1>
		<!-- Formulario para subir los archivos -->
			<div class="mensage"> Archivos Subidos Correctamente </div>      
            <table align="center">
               <tr>
                    <td>Tipo de archivo</td>
                    <td>
                    	<select name="tipo_ar" id="tipo_ar">
                    		<option value="1">Calendario Académico</option>
                    		<option value="2">Reglamento Estudiantil</option>
                    		<option value="3">Reglamento de docentes</option>
                    		<option value="4">Sistema de Evaluación</option>
                    		<option value="5">Tarifas</option>
                    	</select>
                    </td>
                </tr>
                <tr>
                    <td>Archivo</td>
                    <td><input type="file"   id="archivos"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><button id="enviar">Enviar Archivo</button></td>
                </tr>    
            </table>
            <a href="../index2.php">Regresar al menú principal</a>
	</body>
</html>