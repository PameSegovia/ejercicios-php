<?php

$servidor="localhost";//127.0.0.1
$usuario="root";
$contrasenia="";

try{

	$conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia );
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la Programación', 'foto.jpg');";

	$conexion->exec($sql);
	
	echo "Conexión Establecida";

}catch(PDOException $error){
	echo "Conexión Erronea.".$error;

}

?>