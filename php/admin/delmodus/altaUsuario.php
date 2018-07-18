<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Alta de usuario</title>
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
?>  

<div class="section">
  <div class="container">
    <div class="row center">
      <form action="altaUsuario2.php" method="post" enctype='multipart/form-data'>  
        <div class="col m6 s12" id="preview">
        
        </div>
        <div class="input-field col s12 m6">
          <input type="text" name="nombre" id="usuario" required>
          
          <input type="password" name="pass" id="password" required placeholder="Año de lanzamiento">
         
          <input type="file" name="foto" onchange="preview(this)"> 
        </div>
        <input type="submit" value="confirmar">
  </form>
<?php  
  }else{
  header('Location:../../../login.php');
}
?>

  <script src="common/js/jquery.js"></script>
  <script src="common/js/materialize.js"></script>
  <script src="common/js/script_menu.js"></script>
</body>
</html>