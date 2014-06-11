<?php
	session_start(); //Inicia Manipulación de Variables de Session
    if (isset($_SESSION['nomusuario'])){   // Existe la variable 	
	    $usuario=$_SESSION["nomusuario"];
    }else {
		header('Location: index.html');
    }
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
		<div class="large-9 columns">
      	
    	</div>
    	<div class="large-3 columns">
     		 <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">              
              <li class="active"><a href="cerrarsesion.php">Cerrar Sesión</a></li>
            </ul>
        <!-- Left Nav Section -->
            <ul class="left">
              <li><a href="#"><?php echo $usuario ?></a></li>
            </ul>
       		 </section>            
    	</div>
    </div>
		<br>
		<br>
		<br>
		<br>
		<div class="row">
			<div class="large-6 columns ">
				<h3><img src="logo.png" display= "block";
     	 margin-left= "auto";
      		margin-right= "auto"/></h3>			
			</div>
			<div class="large-6 columns">
				<br>
				<br>
				<br>
				 <fieldset class="panel radius">
          		<legend>Crear Usuario</legend>
				<form action="guardararchivo.php" method="post">
				<div class="row">
              		<div class="large-4 columns">
              			<label class="right" for="">Usuario</label>
              		</div>
              		<div class="large-8 columns">
                	<input type="text" name="usu" value="" placeholder="Usuario">
              		</div>
            	</div>
            	<div class="row">
              		<div class="small-6 large-4 columns">
                		<label class="right" for="">Contraseña</label>
              		</div>
              		<div class="large-8 columns">
                	<input type="password" name="con" value="" placeholder="Contraseña">
              		</div>
            	</div>
            	<div class="row">
              		<div class="large-12 columns">
                	<center><input type="submit" name="" value="Guardar" class="button "></center>
              		</div>
            	</div>		
				</form>
				</fieldset>
			</div>
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