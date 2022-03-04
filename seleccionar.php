<?php
	include "conexion.php";

	$consulta = "SELECT codigo, nombre, apellido FROM alumno";
	$resultado = mysqli_query($conn, $consulta);

	if (mysqli_num_rows($resultado) >0) {
		
		while ($fila = mysqli_fetch_assoc($resultado)) {
		
			echo "Codigo Estudiante: ".$fila["codigo"]." Nombre: ".$fila["nombre"]." Apellido: ".$fila["apellido"]. "<br>";
		}
	}	
?>