<?php
	function conectar(){
		$host = "localhost";
		$user = "root";
		$pass = "";
		$db = "dbprueba";

		$conexion = mysqli_connect($host, $user, $pass) or die("Error al conectar al host" . mysql_error());
        $db = mysqli_select_db($conexion, $db) or die("Error al conectar a la base de datos");
        return $conexion;

	}

?>