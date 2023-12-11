<?php

$jsonContenido='[
	{"nombre":"Pamela", "apellido":"Segovia"},
	{"nombre":"Maite", "apellido":"Altamirano"}
	]';

	$resultado= json_decode($jsonContenido);
	//print_r($resultado);

	foreach($resultado as $persona){
		print_r($persona->nombre);
	}

?>