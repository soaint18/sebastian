<?php 
	require("../conexion/conn.php");

	$sql = "SELECT name, mensaje 
			FROM chat;";

	$result = mysqli_query($conexion, $sql);

	while ($data = mysqli_fetch_assoc($result)) {
		//echo '<p><b>'.$data["name"].'</b> : '.$data["mensaje"].'</p>';
		echo "<p><b>".$data['name']."</b> dice: ".$data['mensaje']."</p>";
	}
?>