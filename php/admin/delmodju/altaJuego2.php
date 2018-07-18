<?php  
	session_start();
?>

<?php 
 	require("../../conexion/conn.php");

   	$ruta = "../../../common/foto/juegos/";
    $archivoFoto = $_FILES["foto"]["name"];
    move_uploaded_file($_FILES["foto"]["tmp_name"], $ruta.$archivoFoto);

	$conexion->query("INSERT INTO juegos(nombre,descripcion,foto)
	 				  VALUES('$_REQUEST[nombre]', 
	 				  		 '$_REQUEST[descripcion]',
				   			 '$archivoFoto')")
	or die($conexion->error);

	echo "Insercion hecha";
	$conexion->close();

	header('Location: ../panelJuegos.php');
?>