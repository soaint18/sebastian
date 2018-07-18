<?php
 	require("../../conexion/conn.php");

  $conexion->query("DELETE FROM juegos 
    			    WHERE id = $_REQUEST[id]") 
  or
  die($conexion->error);    
    
  $conexion->close();
    
    header('Location:../panelJuegos.php');
  ?>  

