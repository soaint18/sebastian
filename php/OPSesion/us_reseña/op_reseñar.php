<?php  
session_start();

require("../../conexion/conn.php");


$puntoNuevo = $_REQUEST['puntos'];
$nom = $_SESSION['u_usuario'];
    echo "<pre>";
    print_r($_REQUEST);
    print_r($nom);
    echo "</pre>";
$conexion->query("UPDATE juegos
				  SET puntos = puntos + $puntoNuevo
				  WHERE id = $_REQUEST[idj]")
				  or die($conexion->error);

$conexion->	query("INSERT INTO comentarios (usuario,descripcion, id_juego)
				   VALUES('".$nom."' , 
				   		  '$_REQUEST[reseña]',   
				   		  $_REQUEST[idj]
				   	)")
			or die($conexion->error);
$conexion->close();
header('Location:../../OPSesion/sesion.php');

?>
