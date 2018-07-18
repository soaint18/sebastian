<?php  
	$host="localhost";
	$usuario="root";
	$password="";
	$db="social";
/*
	$host="sql312.byethost.com";
	$usuario="b5_20728550";
	$password="mipaginastm";
	$db="b5_20728550_socgam";
*/	
	$conexion = new mysqli($host,$usuario,$password,$db);

	if ($conexion->connect_error) {
    	die("Problemas con la conexion a la base de datos");
	}	 	
?>