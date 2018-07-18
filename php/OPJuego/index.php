 
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

        <li><a href="../OPSesion/sesion.php"><?php echo $_SESSION['u_usuario'] ?> </a></li>
        <li><a href="../OPchat/index.php">Chat</a></li>
        <li><a href="../conexion/salir.php">Salir</a></li>
        <li><a href="reseñas.php">Ver mis reseñas</a></li>

      </ul>
      <ul id="nav-mobile" class="sidenav">
        <li><a href="../OPSesion/sesion.php"><?php echo $_SESSION['u_usuario'] ?> </a></li>
        <li><a href="../OPchat/index.php">Chat</a></li>
        <li><a href="../conexion/salir.php">Salir</a></li>
        <li><a href="reseñas.php">Ver mis reseñas</a></li>
      </ul>

      <a href="#" data-target="nav-mobile" class="sidenav-trigger">
        <i class="material-icons">menu</i>
      </a>
    </div>
    </nav>

<?php
    require("../conexion/conn.php");
    
    $nom = $_SESSION['u_usuario'];
    $us = $conexion->query("SELECT * 
    						FROM juegos 
    						WHERE id = $_REQUEST[id]")
    or die($conexion->error);

    if($u = $us->fetch_array()){
?>

<div class="section grey darken-4">
  <div class="container">
    <div class="row center">
      <h2 class="header center"></h2>
    </div>
    <div class="row center">
      <img src="../../common/foto/juegos/<?php echo $u['foto'] ?>" class="cirMedFoto">
    </div>
    <div class="row center">
      <h5 class="white-text"><?php echo $u['nombre'] ?></h5>
      <p class="white-text"><?php echo $u['descripcion'] ?></p>
    </div>
    <div class="row center">
      <div class="col s12">
        <h5 class="white-text">Puntos --> <?php echo $u['puntos'] ?></h5>
      </div>
    </div>
    <div class="row center">
      <h5 class="white-text">Reseñas</h5>
      <table class="centered">
      <?php  
        $com = $conexion->query("SELECT * 
                                FROM comentarios   
                                WHERE id_juego = (SELECT id
                                                  FROM juegos
                                                  WHERE id = $_REQUEST[id])")
          or die($conexion->error);
        while ($c = $com->fetch_array()) {
      ?>
          <tr>
            <td>
              <span class="red-text"><?php echo $c['usuario']?></span> <span class="white-text">comentó :</span>
              <span class="white-text"> " <?php echo $c['descripcion'] ?> " </span>
              <span class="white-text"> ( <?php echo $c['fecha'] ?> )</span>
            </td>
          </tr>
      <?php  
        }
      ?>
  
        </table>
    </div>
  </div>
</div>

<?php 
    }else{
      echo "No hay nadie";
    }
  $conexion->close();
?>
</body>
</html>    
<!-- Script para gestionar el chat -->
<script src="../../common/js/jquery.js"></script>
<script src="../../common/js/materialize.js"></script>
<script src="../../common/js/script_menu.js"></script>
