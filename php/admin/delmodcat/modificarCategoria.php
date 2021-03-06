<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modificar Usuario</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  	<!-- CSS -->
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../../common/css/materialize.css">
	<link rel="stylesheet" type="text/css" href="../../../common/css/estilo.css">
</head>
<body>
<?php 

require("../../conexion/conn.php");

if(isset($_SESSION['u_usuario'])){

	$registro=$conexion->
	("SELECT * FROM generos 
                         WHERE id = $_REQUEST[id]") 
	or die($conexion->error);

	if($u = $registro->fetch_array()){
?>
<div class="section">
	<div class="container">
		<div class="row center">
			<form action="modificarCategoria2.php" method="post" enctype='multipart/form-data'>
				<div class="input-field col m6 s12">
					<input type="text" name="nnombre" size="50" value="<?php echo $u['nombre']; ?>">	 
					<input type="hidden" name="id" value="<?php echo $u['id']; ?>"> 

				</div> 
				<div class="center">
					<input type="submit" value="Modificar" class="center">
				</div>			
			</form>
		</div>
	</div>
</div>
<?php  
	}else{
		echo "No existe un genero con dicho código";
	}
}else{
	header('Location:../../../login.php');
}
$conexion->close();	
?>

<script src="../../../common/js/jquery.js"></script>
<script src="../../../common/js/materialize.js"></script>
<script src="../../../common/js/script_menu.js"></script>
</body>
</html>