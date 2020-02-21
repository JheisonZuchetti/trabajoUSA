<?php session_start();
require 'views/menu.php';
require 'admi/conexion.php';



  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$correo = filter_var(strtolower( $_POST['user']) ,FILTER_SANITIZE_STRING);
	$password = $_POST['pass'];
	

	

   $query="SELECT * FROM admi WHERE user='$correo' AND password = '$password' ";

    $consulta = $conexion->query($query);
    $row = $consulta->fetch(PDO::FETCH_ASSOC);
          
if ($row != false) {
	
	 	$_SESSION['usuario'] =$correo;


	  header('Location:admi/index.php');
	
	
}else{

     
   }

}


   require 'views/login.v.php';


 ?>