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

	$consulta = "INSERT INTO alumno (nombre, apellido) VALUES ('Sebastian','Duran')";

	if (mysqli_query($conn, $consulta)) {
		$ultimo_codigo = mysqli_insert_id($conn);
		echo "Alumno ingresado con el codigo: ".$ultimo_codigo;
	}

	else{
		echo "Error".$consulta."<br>".mysqli_error($conn);
	}
	
?>