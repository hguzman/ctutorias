<?php
	session_start(); //Inicia Manipulación de Variables de Session
    if (isset($_SESSION['nomusuario'])){    	
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
              <li><a href="#"><?php echo $usuario ? ?></a></li>
            </ul>
        	</section>            
    </div>
  </div>
		
		<br>
		<div class="row">
			<div class="large-2 columns panel">
				<ul class="side-nav">
				  <li><h5><a href="crearusuario.php">Crear</a></h5></li>
				  <li><h5><a href="#">Modificar</a></h5></li>
				  <li><h5><a href="#">Listar</a></h5></li>
				  <li><h5><a href="#">Eliminar</a></h5></li>
				</ul>				
			</div>
			<div class="large-10 columns">
				Que hace la opcion usuario
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, rerum, accusantium, ullam optio a tempore saepe laborum facere odit omnis iusto aspernatur id reprehenderit dolore illo delectus nemo distinctio fuga!
			</div>
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