<?php

	// Valida que tenga una session activa
	session_start(); //Inicia Manipulación de Variables de Session
    if (isset($_SESSION['nomusuario'])){   // Existe la variable 	
	    $usuario=$_SESSION["nomusuario"];
    }else {
		header('Location: index.html');
    }
    // ****************

	$usuario=$_POST["usu"];
	$cont=$_POST["con"];
	$perfil=$_POST["per"];

$db = mysql_connect("sql7.bravehost.com", "sandra","clinica12345");
mysql_select_db("siptca_1900960",$db);

$sql ="insert into usuarios value('$usuario','$cont','$perfil')";

$result = mysql_query($sql);

header('Location: crearusuario.php');

?>