<?php
	session_start();
	require('../config.php');
	$email = $_POST['email'];
	$pass = md5($_POST['pass']);
	// echo "DEBUG: ".$email." + ".$pass;
	$query = $cn->prepare("SELECT * FROM usuario WHERE email=? AND pass=?"); 
	//AQUI LE PASAMOS EL PARAMETRO 
	$query->execute(array($email, $pass)); 
	while($row = $query->fetch()):
		$log = $row['id'];
	endwhile;
	
		if($log == null){
			echo $log;
			header("Location: ../index.php?e=1"); 
		}else{
			//echo $log;
			$_SESSION["id"] = $log;
			session_register("SESSION");
			header("Location: ../escritorio.php"); 
		}
?>