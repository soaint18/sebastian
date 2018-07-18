<?php
	require("../../conexion/conn.php");


    $conexion->query("UPDATE generos
                      SET nombre = '$_REQUEST[nnombre]'
                      WHERE id = $_REQUEST[id]")
    or die($conexion->error);

    $conexion->close();
    header('Location:../panelCategoria.php');

?>