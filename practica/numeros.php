<!DOCTYPE html>
<html>
<head>
	<title>gcgcg</title>
</head>
<body>
	<form method="post" action="<?php include('practica.php'); 
	if(isset($_POST['enviar'])){
		$nuevo = mayor();}
	?>" method="post">
	<button type="submit" name="enviar"> Enviar</button>
		Dato 1:<input type="number" name="num1"/><br>
		Dato 2:<input type="number" name="num2"/><br>
		
		<!--input type="submit" name= "enviar" value="Enviar"/-->
	</form>

	<?php
		echo "el numero mayor es: ". $nuevo;
	?>
</body>
</html>