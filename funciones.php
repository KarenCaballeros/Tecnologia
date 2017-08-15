<?php


	function agregar(){
		$datos = array(
        array('nombre' =>"Mario", 'apellidos'=>"Pereira",'direccion' => "Clle 35 # 10-51",'telefono'=>"3156257",'edad'=>37), 
        array('nombre' => "Juan",'apellidos'=>"Perez",'direccion' => "Cra 45 # 45-56",'telefono'=>"3456789",'edad' => 20),
        array('nombre' => "Pablo",'apellidos'=>"Marique",'direccion' => "Clle 23 # 12-19 Sur",'telefono'=>"3214567",'edad'=>25),
        array('nombre' => "Nancy",'apellidos'=>"Peña",'direccion' => "Av. 34 # 16-12", 'telefono'=>"2135423",'edad'=>15),
        );

        $otro['nombre'] = $_POST['nombre'];
        $otro['apellido'] = $_POST['apellido'];
        $otro['direccion'] = $_POST['direccion'];
        $otro['telefono'] = $_POST['telefono'];
        $otro['edad'] = $_POST['edad'];
        array_push($datos, $otro);
	}

	function mostrar($lista){
		$cantidad = count($lista);
		for($i = 0; $i < $cantidad; $i++){
			echo "Nombre: ", $lista[$i]['nombre'],<br>;
			echo "Apellido: ", $lista[$i]['apellido'],<br>;
			echo "Direccion: ", $lista[$i]['direccion'],<br>;
			echo "Telefono: ", $lista[$i]['telefono'],<br>;
			echo "Edad: ", $lista[$i]['edad'],<br>,<br>;	
		}
	}
	function promedio($lista){
		$cantidad = count($lista);
		for($i = 0; $i < $cantidad; $i++){
			$suma = $lista[$i]['edad'];
		}
		$promedio = $suma/$cantidad
		echo "El promedio de edad es: ", $promedio,<br>
	}

?>	
