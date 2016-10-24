<?php 
 $dir = "fotos";


 	echo "<table>";
 if (is_dir($dir)){
 	if($dh = opendir($dir)){
 		while (($file = readdir($dh))!== false){

 			//Busca que extensión tiene el archivo
 			$extension = end(explode('.', $file));
 			//Llama a la funcion validar_ext y pasa la extension del archivo.
 			$comprobacion = validar_ext($extension);

 			if($file != "." && $file != ".." && $comprobacion=="Y"){
 				echo "<tr><td><img width='100px' height='100px' src=".$dir.'/'.$file."></td></tr>";
 			}
 			//echo "filename: ".$file." filetype: ".filetype($dir)."</br>";				
 		}
 			
 	}
 }
 	echo "</table>";

 	//Funcion que comprueba la extension de la foto, si es correcta devolvera Y y si no lo es devolvera N
 	function validar_ext($extension){
	 	if($extension=='jpg'|| $extension=='png' || $extension=='bmp' || $extension=='gif'){
	 		return "Y";
	 	}else{
	 		return "N";
	 	}
 	}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 10</title>
</head>
<body>
	
</body>
</html>