<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Categoria panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../common/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="../../common/css/estilo.css">
</head>
<body>
<?php
    require("../conexion/conn.php");
    if(isset($_SESSION['u_usuario'])){
        $registro = $conexion->query("SELECT * FROM generos")
        or die($conexion->error);   
?>

<nav class="red darken-3">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.html" class="brand-logo">
        <i class="large material-icons">child_care</i>
         <?php echo $_SESSION['u_usuario']; ?>
      </a>
      
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Menu Inicio</a></li>

        <li><a href="panelUsuarios.php">Panel usuarios</a></li>
        <li><a href="panelJuegos.php">Panel juegos</a></li>

        <li><a href="../../juegos.php">Juegos</a></li>
        <li><a href="../OPchat/index.php">Chat</a></li>

        <li><a href="../conexion/salir.php">Salir</a></li>

      </ul>
      <ul id="nav-mobile" class="sidenav">
        <li><a href="index.php">Menu Inicio</a></li>

        <li><a href="panelUsuarios.php">Panel usuarios</a></li>
        <li><a href="panelJuegos.php">Panel juegos</a></li>
        
        <li><a href="../../juegos.php">Juegos</a></li>
        <li><a href="../OPchat/index.php">Chat</a></li>

        <li><a href="../conexion/salir.php">Salir</a></li>
      </ul>

      <a href="#" data-target="nav-mobile" class="sidenav-trigger">
        <i class="material-icons">menu</i>
      </a>
    </div>
    </nav>



<div class="section"> 
    <div class="container">
        <div class="row center">
            <table class="highlight centered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                </tr>
            </thead>
<?php
    while ($f = $registro->fetch_array()) {
        echo '<tr>';
        echo '<td>'.$f['id'].'</td>';      
        echo '<td>'.$f['nombre'].'</td>'; 
        echo '<td><a href="delmodcat/borrarCategoria.php?id='.$f['id'].'"><i class="small material-icons red-text">delete</i></a></td>';      
        echo '<td><a href="delmodcat/modificarCategoria.php?id='.$f['id'].'"><i class="small material-icons ligthblue-text">border_color</i></a></td>';
        echo '</tr>';

    }
?>
            <tr><td colspan="5"><a href="delmodcat/altaCategoria.php"><i class="medium material-icons green-text">person_add</i></a></td>
            </tr>
</table>
<?php 
    }else{
        header('Location:../../login.php');
    }
?>
        </div>
    </div>
</div>



<script src="../../common/js/jquery.js"></script>
<script src="../../common/js/materialize.js"></script>
<script src="../../common/js/script_menu.js"></script>

</body>
</html>