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
  <div class="row">    
    <div class="large-9 push-3 columns">
      
      <h3>SIPTCA <small>Sistema de Informacion para Tutores y Control Administrativo</small></h3>
      
      <p>El objetivo principal del SIPTCA es ofrecer a Clinica de Tutorias, y a través de este a los países participantes, un instrumento y una metodología para el rápido y efectivo acceso a los datos e información sobre la empresa, de diferentes tipos y de diferentes fuentes. Esta tecnología permitirá a los usuarios establecer procesos personalizados de búsqueda, hechos a conveniencia de sus necesidades.</P>

      <p>Un subproducto de este Sistema sera establecer nuevos metodos de pagos de igual forma establecer ayudas para las preguntas, reclamos y quejas que a sus usuarios surjan</p>.

      <p>Para racionalizar el desarrollo e implementación del Sistema, mejorar la posibilidad de su éxito, incrementar su uso e interés por parte de todos los interesados, el Sistema será estructurado en cinco Módulos Administrador , Módulos Tutor y Módulos Cliente </p>       
    </div>
    <div class="large-3 pull-9 columns">
        
      <ul class="side-nav">
            <li><a href="administracion.php"><h5>Administración</h5></a></li>
 
        <li><h5><a href="nuevousuario.php">Nuevo Usuario</a></h5></li>
        <li><h5><a href="codigo/usuarios/listarusuario.php">Listar Usuario</a></h5></li>
 
      </ul>
      
      <p><img src="sistema1.png"/></p>
        
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

		