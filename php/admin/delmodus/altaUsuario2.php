<?php  
	session_start();
?>

<?php 
 	require("../../conexion/conn.php");

   	$ruta = "../../../common/foto/usuarios/";
    $archivoFoto = $_FILES["foto"]["name"];
    move_uploaded_file($_FILES["foto"]["tmp_name"], $ruta.$archivoFoto);

	$conexion->query("INSERT INTO usuarios(nombre,pass,foto)
	 				  VALUES('$_REQUEST[nombre]', 
	 				  		 '$_REQUEST[pass]',
				   			 '$archivoFoto')")
	or die($conexion->error);

	$conexion->close();
	
	header('Location:../../conexion/checklogin.php');
?>
