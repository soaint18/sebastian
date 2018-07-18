<?php
session_start();   // Necesitamos una sesion
if(isset($SESSION['u_usuario'])){  // comparamos si existe
 	header("Location: php/OPSesion/sesion.php"); // si existe, lo redireccionamos a sesion.php
}
else{
 session_destroy();  // si no existe, destruimos sesion
}
?>﻿
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Iniciar sesion</title>
  <!-- Etiquetas a nivel de navegación -->
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CSS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="common/css/materialize.css">
  
  <link rel="stylesheet" href="common/css/estilo.css">
</head>

<body>
	<!-- Barra de navegación -->
	<nav class="red darken-3">
		<div class="nav-wrapper container">
			<a id="logo-container" href="index.html" class="brand-logo">
				<i class="large material-icons">child_care</i>
				SocialGamers
			</a>
			<ul class="right hide-on-med-and-down">
				<li><a href="registro.html">Registrarse</a></li>
				<li><a href="juegos.php">Juegos</a></li>
				<li><a href="destacados.php">Destacados</a></li>
				<li><a href="acerca.html">Acerca de </a></li>
			</ul>
			<ul id="nav-mobile" class="sidenav">
				<li><a href="registro.html">Registrarse</a></li>
				<li><a href="juegos.php">Juegos</a></li>
				<li><a href="#">Destacados</a></li>
				<li><a href="acerca.html">Acerca de</a></li>
			</ul>
			<a href="#" data-target="nav-mobile" class="sidenav-trigger">
				<i class="material-icons">menu</i>
			</a>
		</div>
	</nav>
	<!-- seccion principal -->
	<section class="section">
		<div class="container">
			<div class="row center">
				<h1 class="header center">Iniciar sesión</h1>
			</div>

			<div class="row">	
    			<form action="php/conexion/checklogin.php" method="post" class="col s12">
    				<div class="row">
    					<div class="input-field col s6">
    						<input type="text" name="usuario" id="usuario" required>
	    					<label for="usuario">Usuario:</label>
    					</div>
    					<div class="input-field col s6">
    						<input type="password" name="contraseña" id="password" required >
							<label for="password">Contraseña:</label>
    					</div>
    				</div>	
 					<div class="row center">
 						<button class="btn waves-effect green" type="submit" name="submit" >
 							Entrar
 							<i class="material-icons right">send</i>
 						</button>
 						<!--<input type="submit" name="submit" value="login">-->
 					</div>			
   	 			</form>
   	 		</div>
		</div>
	</section>
    


  <footer class="page-footer red darken-3">
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
                <span><a href="#">Facebook</a></span>
              </div>
              <div class="col m4 s12">
                <span><a href="#">Twitter</a></span>
              </div>
              <div class="col m4 s12">
                <span><a href="#">Instagram</a></span>
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
    <!-- Scripts utilizados-->
  <script src="common/js/jquery.js"></script>
  <script src="common/js/materialize.js"></script>
  <script src="common/js/script_menu.js"></script>
</body>
</html>