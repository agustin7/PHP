<?php

	//recoge los datos del formulario
	/*$nombre = $_POST['nombre'];
	$edat = $_POST['edat'];*/

	function initVar (&$var){
		return isset($var) ? $var :null;
	}
	//coge el valor del campo de texto que introducimos por teclado
	$nombre = initVar($_POST['nom']);
	$edat = initVar($_POST['edat']);


	//Comprueba si es mayor o menor de edad
	if($edat >=18){
	echo $nombre." es major d'edat--> ".$edat;
	}else if($edat<18 && $edat >0){
	echo $nombre." es menor d'edat--> ".$edat;
	}
	
?>