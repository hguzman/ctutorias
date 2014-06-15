<?php
	include("../../seguridad.php");
	$usuario=$_GET["usu"];
	$contra=$_GET["con"];
	$perfil=$_GET["per"];
?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width">
	    <link rel="stylesheet" href="../../css/foundation.css" />
	    <script src="../../js/vendor/modernizr.js"></script>
	    <style type="text/css"> 
      	body{ 
     	 background-image: url('imagen/logo.jpg');}
      	</style>
	</head>
	<body>
		
		<div class="row">
    		<div class="large-9 columns">
     		 <h3><img src="logo.png" display= "block";
      		margin-left= "auto";
      		margin-right= "auto"/></h3>
    	</div>
    	<div class="large-3 columns">
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
    	</div>
  		</div>
		<br>
		<div class="row">
			<div class="large-6 columns">
				<form action="../../codigo/guardarcambios.php" method="post">
					<div class="row">
					    <div class="large-12 columns">
					      <label>Usuario <?= $usuario ?>
					        <input type="hidden" placeholder="Nombre Usuario" name="usu" value="<?= $usuario ?>"/>
					      </label>					      
					    </div>
					</div>
					<div class="row">
					    <div class="large-12 columns">
					      <label>Contraseña
					        <input type="password" placeholder="Contraseña" name="con" value="<?= $contra ?>"/>
					      </label>
					    </div>
					</div>
				  <div class="row">
				    <div class="large-12 columns">
				      <label>Perfil de Usuario
				        <select name="per" value="<?= $perfil ?>">
				          <option value="1">Administrador</option>
				          <option value="2">General</option>
				        </select>
				      </label>
				    </div>
				  </div>
				  <input type="submit" value="Guardar Cambios" class="button expand">
				</form>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<h5><a href="administracion.php">Regresar</a></h5>
			<div>
		</div>
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

	</body>
</html>