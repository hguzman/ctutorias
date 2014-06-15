<?php

	include("../seguridad.php");
	include("../conexion.php"); // esto conecta con la base de datos

	$usuario=$_POST["usu"];
	$cont=$_POST["con"];
	$perfil=$_POST["per"];

//$sql ="insert into usuarios value(UPPER('$usuario'),'$cont','$perfil')";
$sql="update usuarios set contrasena='$cont', perfil='$perfil' where usuario='$usuario'";
//echo $sql;
//$nuevo=$algo." ".$otro
$result = mysql_query($sql);
?>



<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width">
	    <link rel="stylesheet" href="../css/foundation.css" />
	    <script src="../js/vendor/modernizr.js"></script>
	    <script src="../js/vendor/jquery.js"></script>
		<script src="../js/foundation/foundation.js"></script>
		<script src="../js/foundation/foundation.alert.js"></script>
		<style type="text/css"> 
      	body{ 
      	background-image: url('imagen/logo.jpg');}
      	</style>	    
	</head>
	<body>
		<div class="row">
			  <nav class="top-bar" data-topbar>
			    <ul class="title-area">
			      <li class="name">
			        <h1><a href="#">Siptca</a></h1>
			      </li>
			      <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
			    </ul>
				<section class="top-bar-section">
				    <!-- Right Nav Section -->
				    <ul class="right">				      
				      <li class="active"><a href="../cerrarsesion.php">Cerrar Sesión</a></li>
				    </ul>
				<!-- Left Nav Section -->
				    <ul class="left">
				      <li><a href="#"><?php echo $usuario ?></a></li>
				    </ul>
				</section>			    			
			  </nav>
		</div>
		<br>
			<?php
				if ($result){
			?>
				<div class="row">
					<div class="large-4 columns panel">
						<label for="">Usuario</label>
						<label for=""><b><?= $usuario ?></b></label>
						<label for="">Perfil</label>
						<label for=""><b><?= $perfil ?></b></label>
					</div>
					<div class="large-8 columns ">
						<center><h3><img src="logo.png" display= "block";
      					margin-left= "auto";
      					margin-right= "auto"/></h3></center>
      				</div>
						
					<br>
					<br>
				</div>
				<div class="row">
					<div data-alert class="alert-box success radius">
						Registro Guardado de marea correcta
					  <a href="#" class="close">&times;</a>
					</div>
					<br>
					<br>
					<br>
					<a href="../admusuario.php">Regresar</a>
				</div>

			<?php
				}else{
			?>
				<div class="row">
					<a href="../admusuarios.php">Regresar</a>
					<br>
					<br>
					<div data-alert class="alert-box alert radius">
						Problemas al intentar Guardar
			    	  <a href="#" class="close">&times;</a>
					</div>
					
				</div>
			<?php
				}
			?>			

		<footer class="row">
    		<div class="large-12 columns">
      		<hr/>
      		<div class="row">
       		 <div class="large-6 columns">
         	 <p>© Siptca.</p>
        	</div>
        	<div class="large-6 columns">
          	<p> Version 1.1.5 </p>
      		</div>
    		</div> 
  		</footer>
		<script>
		  $(document).foundation();
		</script>
	</body>
</html>