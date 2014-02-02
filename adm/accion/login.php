<?php
	require_once('../config.php');
	$email = $_POST['email'];
	$pass = md5($_POST['pass']);
	// echo "DEBUG: ".$email." + ".$pass;

	$query = $cn->prepare("SELECT * FROM usuario WHERE email=? AND pass=?"); 
	
	//AQUI LE PASAMOS EL PARAMETRO 
	$query->execute(array($email, $pass)); 
	while($row = $query->fetch()): echo $row['id'];
	endwhile;
	if($row['id'] == null){
		header("Location: ../login.php?e=1"); 
	}else{
		$_SESSION["autentificado"]= "SI"; 
		header("Location: ../escritorio.php"); 
	}
?>