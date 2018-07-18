<?php  
	session_start();
?>

<?php 
 	require("../../conexion/conn.php");

   	$ruta = "../../../common/foto/juegos/";
    $archivoFoto = $_FILES["foto"]["name"];
    move_uploaded_file($_FILES["foto"]["tmp_name"], $ruta.$archivoFoto);

	$conexion->query("INSERT INTO generos(nombre)
	 				  VALUES('$_REQUEST[nombre]')")
	or die($conexion->error);

	echo "Insercion hecha";
	$conexion->close();

	header('Location: ../panelCategoria.php');
?>