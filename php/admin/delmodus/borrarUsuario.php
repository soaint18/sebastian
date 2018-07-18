<?php
 	require("../../conexion/conn.php");

  
  $conexion->query("DELETE FROM usuarios 
    			          WHERE id = $_REQUEST[id]
    			  ") 
  or
  die($conexion->error);    
    
  $conexion->close();
    
    header('Location:../panelUsuarios.php');
  ?>  

