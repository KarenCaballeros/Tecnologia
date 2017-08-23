<?php

function mayor(){
	if($_POST['num1'] > $_POST['num2']){
		return $_POST['num1'];
	}
	else{
		return $_POST['num2'];
	}
}

?>