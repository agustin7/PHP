<?php
	//Creo un array donde se guardaran todos los numeros al azar
	$array_num= array();


	//Para que no me salga el error inicial que el valor que debemos coger esta vacio.
	function initVar (&$var){
		return isset($var) ? $var :null;
	}
	//coge el valor del campo de texto que introducimos por teclado
	$valor = initVar($_GET['valor']);


	//Meto uno por uno al azar en la array_num, numeros.
	for ($i=0; $i <100 ; $i++) { 
		$azar = rand(1,100);
		$array_num[$i] = $azar;
	}

	//compruebo si dentro de esa array está el numero que hemos pasado por teclado
	if($valor!=null){
		if(in_array($valor, $array_num)){
			echo "Numero encontrado";
		}else{
			echo "no encontrado";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form name="formulario" method="get" action="ejercicio8.php">
	<input type="text" name="valor">
	<input type="submit">
</form>
</body>
</html>