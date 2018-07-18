<?php
session_start();

	require("../../conexion/conn.php");

   	$ruta = "../../../common/foto/usuarios/";
    $archivoFoto = $_FILES["nfoto"]["name"];

    move_uploaded_file($_FILES["nfoto"]["tmp_name"], $ruta.$archivoFoto);

    echo "<pre>";
    print_r($archivoFoto);
    echo "</pre>";
    $conexion->query("UPDATE usuarios
                      SET nombre = '$_REQUEST[nnombre]',
                          pass = '$_REQUEST[npass]',
                          foto = '$archivoFoto' 
                      WHERE id = $_REQUEST[id]")
    or die($conexion->error);

    $conexion->close();
    if($_SESSION['u_usuario'] == "admin"){
      header('Location:../panelUsuarios.php');
    }else{
            header('Location:../../OPSesion/sesion.php');
    }
?>