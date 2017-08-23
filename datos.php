<!DOCTYPE html>
<html>
<head>
	<title>datos</title>
</head>
<body>
	<form action="<?php include('funciones.php'); 
	if(isset($_POST['enviar'])){
		$nuevo = agregar();}
	?>" method="post">
		Nombre:<input type="text" name="nombre"><br> 
		Apellido:<input type="text" name="apellido"><br>
		Direccion:<input type="text" name="direccion"><br>
		Telefono:<input type="text" name="telefono"><br>
		Edad:<input type="numbre" name="edad"><br>
		<input type="submit" name= "enviar" value="Enviar"/>	
	</form>

	<?php
		mostrar($nuevo);
		echo "promedio: ", promedio($nuevo);
	?>
</body>
</html>
