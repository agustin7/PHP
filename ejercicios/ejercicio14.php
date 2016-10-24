<?php 
	//Establecer conexion con BBDD
	//Demanen dades como IP, o nom de host
	//Demanara Usuari y Pass de conexio
	//Y base de dades a la que ens conectem

	//local
/*
	$dbhost ='localhost';
	$dbname = 'prueba';
	$dbuser = 'root';
	$dbpassword = 'linuxlinux';*/

	//vps
	$dbhost ='vps80486.ovh.net';
	$dbname = 'amartin_BDEscola';
	$dbuser = 'amartin_BDEscola';
	$dbpassword = 'linuxlinux';


//obtenim variable de conexio
	$db = new mysqli($dbhost,$dbuser,$dbpassword,$dbname);

	if($db->connect_errno){
		die('error de conexion');
	}else{
		//comprovar $_POST
		if($_POST){
			if($_POST['nom']&& !empty($_POST['nom'])&& $_POST['cognom']&& !empty($_POST['cognom'])&&$_POST['curs']&& !empty($_POST['curs'])){
				//es comprova cadascú dels camps
				//i es genera la SQL
				$sql="INSERT INTO alumnes(nom,cognoms,curs) VALUES ('$_REQUEST[nom]','$_REQUEST[cognom]','$_REQUEST[curs]')";
				echo $sql;
				if(!$result=$db->query($sql)){
					die("Error en insert");
				}
			}
		}

		$sql = "SELECT * from alumnes";

		//mostrar llistat

		$result = $db->query($sql);
		while($rec=$result->fetch_array()){
			echo '<strong><p>'.$rec['nom'].' '.$rec['cognom'].' '.$rec['curs'].'</p></strong>';
		}

	}

	$db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 14</title>
</head>
<body>
	<form method="POST" action="<?= 'ejercicio14.php' ?>">
		<p>Nom:<input type="text" name="nom"></p>
		<p>Cognom:<input type="text" name="cognom"></p>
		<input type="radio" name="curs" value="1SMIX">1SMIX<br>
		<input type="radio" name="curs" value="2SMIX">2SMIX<br>
		<input type="radio" name="curs" value="1DAW">1DAW<br>
		<input type="radio" name="curs" value="2DAW">2DAW<br>

		<p><input type="submit" value="Envia"></p>
	</form>
</body>
</html>