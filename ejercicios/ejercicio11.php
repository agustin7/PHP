<?php 
	
	//Creamos el archivo txt
	//Ponemos tipo 'a' para añadir lineas sin borrar

	$file = fopen("dades.txt","a");

	//ahora añadimos contenido
	fputs($file,"ejercicio11 de php");
	//Ponemos '\n' si queremos hacer un salto de linea
	fputs($file,"\n");
	fputs($fila,"Prueeeeba");

	//Cerramos el archivo txt
	fclose($file);


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 11</title>
</head>
<body>
	
</body>
</html>