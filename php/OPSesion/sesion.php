<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sesion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../common/css/materialize.css">
  <link rel="stylesheet" type="text/css" href="../../common/css/estilo.css">
</head>
<body>

<nav class="red darken-3">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">
        <i class="large material-icons">child_care</i>
         Social Gamers
      </a>
      
      <ul class="right hide-on-med-and-down">

        
        <li><a href="../../juegos.php">Juegos</a></li>
        <li><a href="../../destacados.php">Top Juegos</a></li>
        <li><a href="../conexion/salir.php">Salir</a></li>

      </ul>
      <ul id="nav-mobile" class="sidenav">

        <li><a href="../../juegos.php">Juegos</a></li>
        <li><a href="../../destacados.php">Top Juegos</a></li>
        <li><a href="../conexion/salir.php">Salir</a></li>

      </ul>

      <a href="#" data-target="nav-mobile" class="sidenav-trigger">
        <i class="material-icons">menu</i>
      </a>
    </div>
    </nav>

<?php
    require("../conexion/conn.php");
    
    $nom = $_SESSION['u_usuario'];
    $us = $conexion->query('SELECT * FROM usuarios WHERE nombre = "'.$nom.'"')
    or die($conexion->error);
    if($u = $us->fetch_array()){

?>

<div class="section">
  <div class="container">
    <div class="row center">
         <h2 class="header center">Bienvenido <?php echo $u['nombre'] ?></h2>
    </div>
    <div class="row center">
      <img src="../../common/foto/usuarios/<?php echo $u['foto'] ?>" class="cirfoto center">
    </div>
    <div class="row center">
      <div class="col s12"> 
        <a href="../OPchat/index.php">Chat</a>
        
      </div>
      <div class="col s12">
        <a href="../../juegos.php">Dejar una reseña</a>
      </div>
      <div class="col s12">
        <a href="reseñas.php">Ver mi historial de reseñas</a>
      </div>
      <div>
        <a href="../admin/delmodus/modificarUsuario.php?id=<?php echo $u['id'] ?>">Modificar mis datos</a>
      </div>
    </div>
  </div>
</div>

<?php 
    }else{
      echo "No hay nadie";
    }
  $conexion->close();
?>

<!-- Script para gestionar el chat -->
<script src="../../common/js/jquery.js"></script>
<script src="../../common/js/materialize.js"></script>
<script src="../../common/js/script_menu.js"></script>

</body>
</html>