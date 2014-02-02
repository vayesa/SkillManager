<? 
//Inicio la sesión 
session_start(); 

//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO 
if ($_SESSION["login"] != "si") { 
   	//si no existe, envio a la página de autentificacion 
   	header("Location: escritorio.php"); 
   	//ademas salgo de este script 
   	exit(); 
}else{
	header("Location: login.php");
}	
?>