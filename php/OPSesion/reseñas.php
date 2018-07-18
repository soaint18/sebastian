
<?php
	session_start();   // Necesitamos una sesion
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reseñas</title>  
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
      	<li><a href="sesion.php"><U><?php echo $_SESSION['u_usuario']?></U></a></li>

        <li><a href="../../juegos.php">Juegos</a></li>
        <li><a href="../OPchat/index.php">Chat</a></li>
        <li><a href="../../destacados.php">Top Juegos</a></li>
        <li><a href="../conexion/salir.php">Salir</a></li>
      </ul>
      <ul id="nav-mobile" class="sidenav">

    	  <li><a href="sesion.php"><?php echo $_SESSION['u_usuario']?></a></li>
        <li><a href="../../juegos.php">Juegos</a></li>
        <li><a href="../OPchat/index.php">Chat</a></li>
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
	$us = $_SESSION['u_usuario'];
	$reseñas = $conexion->query("SELECT fecha, c.descripcion  as texto, j.nombre as nombrejuego
								              FROM comentarios c
								              inner join juegos j on  j.id = c.id_juego
	                            WHERE usuario = '$us' ")
	or die($conexion->error);
	?>
<div class="section"> 
	<div class="container">
    <div class="row center"> 
      <h5 class="header">Mis reseñas</h5>
    </div>
		<div class="row center">
		  <table>
				<tr>
				<th>Fecha</th>
				<th>Nombre del juego</th>
				<th>Descripcion</th>
				</tr>
<?php
    while ($f = $reseñas->fetch_array()) {
    	echo '<tr>';
     	echo '<td>'.$f['fecha'].'</td>';      
    	echo '<td>'.$f['nombrejuego'].'</td>';      
    	echo '<td>'.$f['texto'].'</td>';
    	echo '</tr>'; 
?>	


<?php 
    }
?>
  </table>
		</div>
	</div>
</div>


<!-- Script para gestionar el chat -->
<script src="../../common/js/jquery.js"></script>
<script src="../../common/js/materialize.js"></script>
<script src="../../common/js/script_menu.js"></script>

</body>
</html>