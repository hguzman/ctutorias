<?php
	include("conexion.php"); // esto conecta con la base de datos

	$usuario=$_POST['usu'];
	$contrasena=$_POST['con'];

//	echo $usuario;
//	echo $contrasena;


	$sql = "select * from usuarios where usuario='$usuario' and contrasena='$contrasena'";

//	echo $sql;

	$rs = mysql_query($sql,$db); // Aqui hace la consulta y el resultado lo coloca en la variable

	if (mysql_num_rows($rs)==0){
		header('Location: index.html'); // Regresa al index
	}else{
		session_start(); //inicia sesion

		$fila = mysql_fetch_assoc($rs);
		$_SESSION["autentificado"] ="SI"; //guarda la variable de sesion
		$_SESSION["nomusuario"] =$usuario; //guarda la variable de sesion	
		$_SESSION["perfil"]=$fila["perfil"];

    header('Location: principal.php'); // Regresa al index
	}

?>
