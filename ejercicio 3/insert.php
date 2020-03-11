<?php

	// asignamos  las variables $_GET

	$cedula = $_GET['cedula'];
	$nombre = $_GET['nombre'];
	$apellido = $_GET['apellido'];
	$sexo = $_GET['sexo'];

	// var_dump($_GET);
	/*
		El var_dump() imprime el array del $_GET completo algo como

		array(4) { ["cedula"]=> string(8) "27686483" ["nombre"]=> string(6) "Nelson" ["apellido"]=> string(8) "Portillo" ["sexo"]=> string(9) "Masculino" }

		cuando decimos $_GET['cedula'] estamos entrando al valor de la cedula unicamente que seria (27686483)
		Nota echo no imprime array sino cadenas de caracter  para ellos usar
			print_r();
			var_dump();
	*/

	/*
		Hay distintas formas de incrustar un archivo php en otro de los cuales tenemos:

		require "conectar.php"; // el archivo es obligatorio para continuar
		require_once "conectar.php"; // es obligatorio pero solo lo incluye una vez lo cual ahorra recursos del servidor (RECOMENDADO)
		include "conectar.php"; // incluye el archivo pero no es obligatorio, es decir en caso de no encontrarlo continua con el proceso
		include once "conectar.php"; // lo incluye pero solo una vez

	*/

	require "conectar.php";


	$sql = "INSERT INTO tusuario (cedula, nombre, apellido, sexo) VALUES ('$cedula', '$nombre', '$apellido', '$sexo') ";

	$query = mysqli_query(conectar(), $sql);

	if ( $query ) {
		echo "Se ha insertado correctamente los datos";
	}else{
		echo "No se pudo insertar los datos";
	}

	/*
		es recomendable pero no obligatorio cerrar la conexion de la base de datos para agilizar el servidor
		se hac usando
		mysqli_close($conectar());
	*/
?>