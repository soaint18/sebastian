<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
  <!-- Etiquetas a nivel de navegación -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CSS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../common/css/materialize.css">
</head>
<body>
<?php
    if(isset($_SESSION['u_usuario'])){
?>  
<nav class="red darken-3">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">
        <i class="large material-icons">child_care</i>
         <?php echo $_SESSION['u_usuario']; ?>
      </a>
      
      <ul class="right hide-on-med-and-down">

        <li><a href="../OPSesion/sesion.php">Inicio</a></li>
        <li><a href="../../juegos.php">Juegos</a></li>
        <li><a href="../../destacados.php">Top Juegos</a></li>

        <li><a href="../conexion/salir.php">Salir</a></li>
        <?php
          if($_SESSION['u_usuario'] == "admin"){
        ?>
        <li><a href="../admin/index.php">Inicio Admin</a></li>
        <li><a href="panelUsuarios.php">Panel Usuarios</a></li>
        <li><a href="panelJuegos.php">Panel juegos</a></li>
        <li><a href="panelCategoria.php">Panel categorias</a></li>
        <?php 
          }
         ?>
      </ul>
      <ul id="nav-mobile" class="sidenav">
       <li><a href="../OPSesion/sesion.php">Inicio</a></li>
        <li><a href="../../juegos.php">Juegos</a></li>
        <li><a href="../../destacados.php">Top Juegos</a></li>

        <li><a href="../conexion/salir.php">Salir</a></li>
        <?php
          if($_SESSION['u_usuario'] == "admin"){
        ?>
        <li><a href="../admin/index.php">Inicio Admin</a></li>
        <li><a href="panelUsuarios.php">Panel Usuarios</a></li>
        <li><a href="panelJuegos.php">Panel juegos</a></li>
        <li><a href="panelCategoria.php">Panel categorias</a></li>
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
		<div class="row">
			<form id="formChat">
				<!-- parte nick-->
				<div class="input-field col-s6">
						<label for="user">Usuario</label>
						<input type="text" id="user" name="user" required
             value="<?php echo $_SESSION['u_usuario'] ?>"> 
				</div>

				<!-- parte conversacion-->
				<div class="col-s6">
					<div id="chat" style="height:200px; border: 1px solid #CCCCCC; padding: 12px;  border-radius: 5px; overflow-x: hidden;">					
					</div>
				</div>

				<!-- parte mensaje-->
				<div class="input-field col s6">
					<label for="mensaje">Introduce el mensaje:</label>
					<textarea id="mensaje" class="materialize-textarea" data-length="100" name="mensaje" required></textarea>

				</div>
        <div class="col-s6">
          <button id="enviar" class="btn"> Enviar </button>
			   </div>
			</form>
		</div>
    <div class="row">
      <?php  
        if ($_SESSION['u_usuario']=="admin") {
           echo '<a href="../admin/index.php">Panel Admin</a>';
        }
      ?>

    </div>
	</div>
</div>

<?php 
  }else{
        header('Location:../../login.php');
    }
?>
<!-- Script para gestionar el chat -->
<script src="../../common/js/jquery.js"></script>
<script src="../../common/js/materialize.js"></script>
<script src="../../common/js/script_menu.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
    		//$('textarea#message').characterCounter();
 			registrarMensajes();
 			//$.ajaxSetup({"cache":false});
 			setInterval("cargarMensajes()", 500);
  		});


  		var registrarMensajes = function(){
  			$("#enviar").on("click",function(e){
  				//e.preventDefault();
  				var frm = $("#formChat").serialize();
  				//console.log(frm);//Primera captura del usuario y mensaje
  				$.ajax({
  					type:"POST",
  					url:"insertar.php",
  					data:frm
  				}).done(function(info){
  					$("#mensaje").val("");
  					var altura = $("#chat").prop("scrollHeight");
  					$("#chat").scrollTop(altura);
  					console.log(info);
  				})
  			});
  		}

  		var cargarMensajes = function(){
  			$.ajax({
  				type:"POST",
  				url:"chat.php",
  			}).done(function(info){
  				$("#chat").html(info);
  				$("#chat p:last-child").css({"background-color":"lightgreen",
  													 "padding-botton":"20px"});
  				var altura = $("#chat").prop("scrollHeight");
  				$("#chat").scrollTop(altura);
  			});
  		}
	</script>
</body>
</html>