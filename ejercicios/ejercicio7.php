<?php
	//Declaro la constante
	define('TAM', 10);
	//Creo la tabla en formato html
	echo "<table border=1>";
	//Hago el contador para multiplicar por 10
	for ($i=0; $i <=TAM ; $i++) {
		//Hago condiciones para que las fileras me cambien de color, este caso si $i dividiendo entre 2 su residuo es 0
		if($i%2==0){
			echo "<tr><td bgcolor='blue'>".TAM*$i."</td></tr>";
		}else{
			echo "<tr><td bgcolor='green'>".TAM*$i."</td></tr>";
		}

		
	}
	//cierro la tabla
	echo "</table>";
?>