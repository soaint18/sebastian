<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Admin sebas</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../common/css/materialize.css">
  <link rel="stylesheet" type="text/css" href="../../common/css/estilo.css">
</head>
<body>
<?php
    if(isset($_SESSION['u_usuario'])){
?>	
<nav class="red darken-3">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.html" class="brand-logo">
        <i class="large material-icons">child_care</i>
         SocialGamers
      </a>
      
      <ul class="right hide-on-med-and-down">

        
        <li><a href="../../juegos.php">Juegos</a></li>
        <li><a href="../OPchat/index.php">Chat</a></li>

        <li><a href="../conexion/salir.php">Salir</a></li>

      </ul>
      <ul id="nav-mobile" class="sidenav">
 
        <li><a href="../../juegos.php">Juegos</a></li>
        <li><a href="../OPchat/index.php">Chat</a></li>

        <li><a href="../conexion/salir.php">Salir</a></li>
      </ul>

      <a href="#" data-target="nav-mobile" class="sidenav-trigger">
        <i class="material-icons">menu</i>
      </a>
    </div>
    </nav>

<header>
	<div class="container">
		<div class="row">
			<h2 class="header center">
				<?php echo "Bienvenido : ".$_SESSION['u_usuario']; ?>
			</h2>
		</div>
	</div>
</header>


<section>
	<div class="container">
		<div class="row center">
			<ul>
				<li><a href="panelUsuarios.php">Gestionar usuarios</a></li>
				<li><a href="panelJuegos.php">Gestionar juegos</a></li>
				<li><a href="panelCategoria.php">Gestionar categorias</a></li>
				<li><a href="../OPchat/index.php">Ir al chat</a></li>
			</ul>
		</div>
	</div>
</section>
<?php 
	}else{
        header('Location:../../login.php');
    }
?>

<script src="../../common/js/jquery.js"></script>
<script src="../../common/js/materialize.js"></script>
<script src="../../common/js/script_menu.js"></script>
</body>
</html>