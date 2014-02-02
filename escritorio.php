<?php 
	include('segur.php');
	$idUsuario = $_SESSION['id'];
	//echo "ID: ".$idUsuario; 
	// CARGAMOS LA ESTRUCTURA DE ARCHIVOS DEL TEMPLATE
	include('template/header.php');

	include('template/footer.php');
?>