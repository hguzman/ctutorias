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
      <script src="js/vendor/jquery.js"></script>
      <script src="js/misjs/menu.js"></script>
      <style type="text/css"> 
      body{ 
      background-image: url('imagen/logo.jpg');}
      </style>
  </head>
  <body>
		<div class="row">
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
      <div class"large-9 columns">
        <h1> P.Q.R</h1>
      </div>
  		</div>
		<br>
		<div class="row">
			<div class="large-6 columns">
				<FORM action="nuevo.php" method="POST">
				<p>
				<label>Nombre <input name="nombre" type="text" id="nombre"size="42"/></label>
				</p>
				<p>
				<label>Empresa
				<input name="empresa" type="text" id="empresa" size="31"/></label></p>
				<p><label>E-mail <input name="mail" type="text" id="mail" size="43"/>
				</label>
				</p>
				<p><label for="mensaje">Mensaje<br>
				<textarea name="mensaje" cols="40" rows="8" id="mensaje">
				</textarea></label>
				</p>
				<p><input type="submit" name="Submit" value="Enviar"/>
				<input type="hidden" name="accion" value="enviar_comentario"></p>
				</FORM>
			</div>
			<div class="large-6 columns ">
				<center><h3><img src="logo.png" display= "block";
     	 		margin-left= "auto";
      			margin-right= "auto"/></h3>	</center>
      			<br>
      			<h5> Apreciado Usuario:</h5>
				<p>Para nosotros es muy importante contar con usted. En procura de mejorar nuestros servicios y trámites que ofrecemos a nuestros 
					grupos de interés,hemos diseñado este espacio, a través de la cual usted podrá registrar sus solicitudes, quejas, reclamos y/o sugerencias 
					sobre temas de nuestra competencia y de igual forma, consultar información relacionada con nuestro sistema de informacion. <p>

			</div>
      <li><h5><a href="login.php">Regresar</a></h5></li>
		</div>
		<br>
		<br>
		<br>
		<br>
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