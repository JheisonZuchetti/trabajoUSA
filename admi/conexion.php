<?php 


try {
  $servidor = "localhost";
  $base = "guarderia";
  $usuario = "root";
  $pass ="";
  $conexion = new PDO("mysql:host=$servidor;dbname=$base",$usuario,$pass);
  $acentos = $conexion->query("SET NAMES 'utf8'");



} catch (PDOException $e) {
   echo "Error:". $e->getMessage();
}



 ?>