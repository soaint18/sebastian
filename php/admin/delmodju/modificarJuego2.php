<?php
	require("../../conexion/conn.php");

   	$ruta = "../../../common/foto/usuarios/";
    $archivoFoto = $_FILES["nfoto"]["name"];

    move_uploaded_file($_FILES["nfoto"]["tmp_name"], $ruta.$archivoFoto);

    $conexion->query("UPDATE juegos
                      SET nombre = '$_REQUEST[nnombre]',
                          descripcion = '$_REQUEST[ndes]',
                          anio = $_REQUEST[nanio],
                          foto = '$archivoFoto' 
                      WHERE id = $_REQUEST[id]")
    or die($conexion->error);

    $conexion->close();
    header('Location:../panelUsuarios.php');

?>