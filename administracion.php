<?php
	include("seguridad.php");
?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width">
	    <link rel="stylesheet" href="css/foundation.css" />
	    <script src="js/vendor/modernizr.js"></script>
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
				      <li class="active"><a href="cerrarsesion.php">Cerrar Sesión</a></li>
				    </ul>
				<!-- Left Nav Section -->
				    <ul class="left">
				      <li><a href="#"><?= $_SESSION["nomusuario"] ?></a></li>
				    </ul>
				</section>			    			
			  </nav>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<div class="row">
			<div class="large-2 columns ">
				<ul class="side-nav">
				  <li><h3><a href="admusuario.php">Usuarios</a></h3></li>
				  <li><h3><a href="admpersona.php">Personal</a></h3></li>
				</ul>				
			</div>
			<div class="large-10 columns">
				<center><h3><img src="logo.png" display= "block";
      			margin-left= "auto";
      			margin-right= "auto"/></h3></center>

			</div>
		</div>
		
<?php
	include("footer.php");
?>
	</body>
</html>