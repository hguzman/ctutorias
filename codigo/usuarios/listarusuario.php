<?php
	include("../../seguridad.php");

	include("../../conexion.php"); // esto conecta con la base de datos


$sql ="select * from usuarios";

$result = mysql_query($sql);

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
      	background-image: url('logo.jpg');}
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
				      <li class="active"><a href="../../cerrarsesion.php">Cerrar Sesión</a></li>
				    </ul>
				<!-- Left Nav Section -->
				    <ul class="left">
				      <li><a href="#"><?= $_SESSION["nomusuario"] ?></a></li>
				    </ul>
				</section>			    			
			  </nav>
		</div>
		<br>
		<div class="row">
			<div class="large-8 columns">
				<h1>Listado Usuarios</h1>
				<table>
				  <thead>
				    <tr>
				      <th width="200">Usuario</th>
				      <th width="150">Perfil</th>
				      <th colspan="2">Operaciones</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php
					  	while ($row = mysql_fetch_row($result)){ 
					?>
					    <tr>
					      <td><?= $row[0] ?></td>
					      <td><?= $row[2] ?></td>					      
					      <td><a href="editarusuario.php?usu=<?php echo $row[0]; ?>&con=<?php echo $row[1]; ?>&per=<?php echo $row[2]; ?>">Editar</a></td>					      
					      <td><a href="eliminarusuario.php?id=<?php echo $row[0]; ?>">Eliminar</a></td>					      
					    </tr>					
					<?php
						} 
					?>
				  </tbody>
				</table>
				<a href="../../administracion.php">Regresar</a>
			</div>
			<div class="large-4 columns">
				<h3><img src="logo.png" display= "block";
      			margin-left= "auto";
      			margin-right= "auto"/></h3>
		</div>
		<footer class="row">
			<div class="large-12 olumns">
				<hr/>
				<div class="row">
					<div class="large-6 columns">
						<p>© Siptca.</p>
					</div>
					<div class="large-6 columns">
						<ul class="inline-list right">
				            <li><a href="../../admusuario.php">Menu Usuarios</a></li>
				            <li><a href="../../nuevousuario.php">Crear Usuario</a></li>

				          </ul>
					</div>
				</div>
			</div>
		</footer>

	</body>
</html>