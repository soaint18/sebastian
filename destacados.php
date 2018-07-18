<?php
  session_start();
?>﻿
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Ranking de juegos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CSS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="common/css/materialize.css">
  <link rel="stylesheet" type="text/css" href="common/css/estilo.css">
</head>
<body>
  <nav class="red darken-3"">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.html" class="brand-logo">
        <i class="large material-icons">child_care</i>
        SocialGamers
      </a>
      
      <ul class="right hide-on-med-and-down">
        <?php if(isset($_SESSION['u_usuario'])){
        ?>
          <li><a href="php/OPSesion/sesion.php"><?php echo $_SESSION['u_usuario']?></a></li>
          <li><a href="juegos.php">Juegos</a></li>
          <li><a href="php/conexion/salir.php">Salir</a></li>
        <?php
        } else{
         ?>
        <li><a href="login.php">Iniciar Sesión</a></li>
        <li><a href="registro.html">Registrarse</a></li>
        <li><a href="destacados.php">Destacados</a></li>
        <li><a href="acerca.html">Acerca de</a></li>
        <?php 
         } 
         ?>
      </ul>

      <ul id="nav-mobile" class="sidenav">
             <?php if(isset($_SESSION['u_usuario'])){
        ?>
          <li><a href="php/OPSesion/sesion.php"><?php echo $_SESSION['u_usuario']?></a></li>
          <li><a href="juegos.php">Juegos</a></li>

          <li><a href="php/conexion/salir.php">Salir</a></li>
        <?php
        } else{
         ?>
       
        <li><a href="login.php">Iniciar Sesión</a></li>
        <li><a href="registro.html">Registrarse</a></li>
        <li><a href="destacados.php">Destacados</a></li>
        <li><a href="acerca.html">Acerca de</a></li>
        <?php 
         } 
         ?>
      </ul>

      <a href="#" data-target="nav-mobile" class="sidenav-trigger">
        <i class="material-icons">menu</i>
      </a>
    </div>
    </nav>

  <div class="section">
    <div class="container">
      <div class="row center">
        <h2 class="header center">Juegos mejor valorados</h2>  
      </div>
    </div>
  </div>
  

<div class="container">
  <div class="row center">
     <ul class="collection">
<?php
  require("php/conexion/conn.php");
  $juego = $conexion->query("SELECT foto, nombre,SUBSTRING(descripcion,1,50) AS dsc, puntos
                                FROM juegos ORDER BY puntos DESC")
  or die($conexion->error);
  
  while($fila = $juego->fetch_array()){
    $foto = $fila['foto'];
    $nom = $fila['nombre'];
    $dsc = $fila['dsc']; 
    $pnt = $fila['puntos'];
 ?>

    <li class="collection-item avatar">
      <img src="common/foto/juegos/<?php echo $foto; ?>" alt="" class=" circle">
      <span class="title"><?php echo $nom; ?></span>
      <p>  Puntos totales : <?php echo $pnt; ?></p>
    
    </li>
 <?php  
  }
 ?>
  </ul>
  </div>
</div>
  

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
