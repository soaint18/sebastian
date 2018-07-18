<?php  
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Valoracion juego</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CSS -->
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../../common/css/materialize.css">
	<link rel="stylesheet" type="text/css" href="../../../common/css/estilo.css">
</head>

<body>
	<nav class="red darken-3">
		<div class="nav-wrapper container">
			<a id="logo-container" href="#" class="brand-logo">
				<i class="large material-icons">child_care</i>
				SocialGamers
			</a>
			<ul class="right hide-on-med-and-down">
				<li><a href="../sesion.php"><?php echo $_SESSION['u_usuario'] ?></a></li>
				<li><a href="../../../juegos.php">Juegos</a></li>
				<li><a href="destacados.php">Destacados</a></li>
				<li><a href="../../conexion/salir.php">Salir</a></li>


			</ul>
			<ul id="nav-mobile" class="sidenav">
				<li><a href="../sesion.php"><?php echo $_SESSION['u_usuario'] ?></a></li>
				<li><a href="../../../juegos.php">Juegos</a></li>				
				<li><a href="destacados.php">Destacados</a></li>
				<li><a href="../../conexion/salir.php">Salir</a></li>
			</ul>
			<a href="#" data-target="nav-mobile" class="sidenav-trigger">
				<i class="material-icons">menu</i>
			</a>
		</div>
	</nav>


<?php  
require("../../conexion/conn.php");

$registro = $conexion->query("SELECT * FROM juegos 
							  WHERE id = $_REQUEST[id]")
    or die($mysql -> error);
if($reg=$registro->fetch_array()){
?>

<div class="section grey lighten-2">
	<div class="container">
		<div class="row center">
			<h3 class="header center white-text">Puntua este juego !</h3>
			<h5 class="white-text"><?php echo $reg['nombre'] ?></h5>
		</div>
	<div class="row center">
	<img src='../../../common/foto/juegos/<?php echo $reg['foto'] ?>' class="cirMedFoto" >
	<form method="post" action="op_reseñar.php">
		<label>Descripcion y puntos:
			<textarea name="reseña" placeholder="reseña"></textarea>
			<input type="number" name="puntos" minlength="0" maxlength="100">
			<input type="hidden" name="idj" value="<?php echo $_REQUEST['id']; ?>">
		</label>
		<input type="submit" value="Puntuar">
	 <?php
    	} 
    $conexion->close();
  	?>

	</form>
	</div>
	</div>
</div>
 
   <footer class="page-footer red darken-3"">
    <div class="container">
      <div class="row"> 
        <div class="col l6 s12">
          <h5 class="white-text text-accent-3 center">Foro</h5>
          <p class="center">
            ¡ Participa junto al resto de usuarios y comparte opiniones en el chat !
          </p>
        </div>
        <div class="col l6 s12">
          <h5 class="white-text text-accent-3 center">Reseñas </h5>
          <p class="center">
           ¡ Puntúa tus juego favoritos ! 
          </p>
          <div class="container">
            <div class="row center">
              <h5 class="header center">Visitanos en nuestras redes sociales</h5>
            </div>
            <div class="row center">
              <div class="col m4 s12">
                <span>Facebook</span>
              </div>
              <div class="col m4 s12">
                <span>Twitter</span>
              </div>
              <div class="col m4 s12">
                <span>Github</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-copyright">
      <div class="container">
        <div class="row center">
          <div>
            <p>Proyecto realizado como práctica final de formación profesional de grado superior D.A.W</p>
          </div> 
        </div>
      </div>
    </div>
  </footer>


<script src="../../../common/js/jquery.js"></script>
<script src="../../../common/js/materialize.js"></script>
<script src="../../../common/js/script_menu.js"></script>


</body>
</html>