<?php 
	require("../conexion/conn.php");


	$usr = $_POST['user'];
	$msg = $_POST['mensaje'];

	$sql = "INSERT INTO chat(name,mensaje) 
			VALUES ('$usr','$msg')";

	$result = mysqli_query($conexion, $sql);

	if($result){
		echo "Mensaje registrado";
	}


?>