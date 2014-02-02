<?php
	//$bd = "nutri_gestion";
	//$user = "nutri_gestion";
	//$pass = "291160"
	try { 
		$cn = new PDO("mysql:dbname=nutri_gestion;host=localhost","nutri_gestion","291160");
		$cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch( PDOException $e){ 
		echo "Error Connection: " . $e->getMessage(); 
	}
?>