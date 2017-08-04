<!DOCTYPE html>
<html>
<head>
	<title>Hipotenusa</title>
</head>
<body>
<?php
	$a=10;
	$b=20;
	function hipo($a,$b){
		return "la hipotenusa es: ". sqrt(($a*$a)+($b*$b));
	} 
	print(hipo($a,$b));
?>
</body>
</html>