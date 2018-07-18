<?php 
	session_start();
?>
<?php 
	require("conn.php");
	$usuario = $_POST['usuario'];
	$pass = $_POST['contraseña'];

	$resultado = $conexion->query("SELECT * FROM usuarios 
							WHERE nombre = '$usuario'
							AND pass = '$pass'"); 
	
	if($usuario == "admin" && $pass == "admin" ){
		$_SESSION['u_usuario'] = $usuario;
		header('Location: ../admin/index.php');
	}else {
		if($res = mysqli_fetch_array($resultado)){
			$_SESSION['u_usuario'] = $usuario;
			header("Location:../OPSesion/sesion.php");
		}else{
			header('Location: ../../login.php');
		}
	}

?>