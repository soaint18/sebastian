<?php  
	session_start();
	unset($SESSION['u_usuario']);
	session_destroy();
	header('Location: ../../login.php');
?>