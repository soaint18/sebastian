<?php
 	require("../../conexion/conn.php");

  $conexion->query("DELETE FROM generos 
    			    WHERE id = $_REQUEST[id]") 
  or
  die($conexion->error);    
    
  $conexion->close();
    
    header('Location:../panelCategoria.php');
  ?>  

