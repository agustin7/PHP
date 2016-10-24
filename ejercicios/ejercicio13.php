<?php 
	function initVar (&$var){
		return isset($var) ? $var :null;
	}

	$salario = initVar($_POST['salario']);

	if($salario >3000){
		echo "<p>Tu ingreso es superior a 3000 has de pagar impuestos</p>";
	}else if($salario<=3000 && $salario>0){
		echo "<p> No has de pagar impuestos</p>";
	}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 13</title>
</head>
<body>
	<form method="POST" action="<?= 'ejercicio13.php' ?>">
		<p>Seleciona su salario<p>
		<select name="salario">
			<option value="1000">1-1000</option>
			<option value="2000">1001-2000</option>
			<option value="3000">2001-3000</option>
			<option value="3001">+3000</option>
		</select>
		<p><input type="submit" value="Envia"></p>
	</form>
</body>
</html>