<?php
	
	$server = "localhost";
	$user = "root";
	$pass = "";

	// Crea conexion

	$conn = mysqli_connect($server, $user, $pass);

	//Verificar conexion

	if (!$conn) {
		die("Conexion fallo: ".mysqli_connect_error());
	}

	echo "Conexion OK <br>";

	$db = "baseejem";

	$conn = mysqli_connect($server, $user, $pass, $db);

	if (!$conn) {
		die("Conexion a base de datos fallida" .mysqli_connect_error());
	}


	$consulta = "INSERT INTO alumno (nombre, apellido) VALUES ('Nhora','Sierra')";
	$consulta = "INSERT INTO alumno (nombre, apellido) VALUES ('Julian','Duran')";
	$consulta = "INSERT INTO alumno (nombre, apellido) VALUES ('Olga','Hernandez')";

	if (mysqli_multi_query($conn, $consulta)) {
		// code...
	}

	else{
		echo "Error: ".$consulta."<br>".mysqli_error($conn);
	}
	
	
?>