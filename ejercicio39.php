<?php

$nombreArchivo="archivo.txt";
$contenidoArchivo="Hola, saludos";

$archivoAcrear = fopen($nombreArchivo, "w");

fwrite ($archivoAcrear, $contenidoArchivo);

fclose ($archivoAcrear);


?>