<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$a = 8;
		$b = 8;
		$c = 6;
		if ($a == $b || $a == $c || $b == $c){echo "ingresa valores distinos";}
		elseif ($a > $b && $b > $c) {echo "el numero mayor es: " , $a , " y el menor es: " , $c;}
		elseif ($b > $a && $a > $c) {echo "el numero mayor es: " , $b , " y el menor es: " , $c;}
		elseif ($c > $b && $b > $a) {echo "el numero mayor es: " , $c , " y el menor es: " , $a;}
		elseif ($a > $c && $c > $b) {echo "el numero mayor es: " , $a , " y el menor es: " , $b;}
		elseif ($b > $c && $c > $a) {echo "el numero mayor es: " , $b , " y el menor es: " , $a;}
		elseif ($c > $a && $a > $b) {echo "el numero mayor es: " , $c , " y el menor es: " , $b;}
	?>	
</body>
</html>