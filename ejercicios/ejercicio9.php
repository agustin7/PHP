<?php 
 $dir = "fotos";


 	echo "<table>";
 if (is_dir($dir)){
 	if($dh = opendir($dir)){
 		while (($file = readdir($dh))!== false){
 			if($file != "." && $file != ".."){
 				echo "<tr><td><img width='150px' src=".$dir.'/'.$file."></td></tr>";
 			}
 			//echo "filename: ".$file." filetype: ".filetype($dir)."</br>";
 				
 		}
 			
 	}
 }
 	echo "</table>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 9</title>
</head>
<body>
	
</body>
</html>