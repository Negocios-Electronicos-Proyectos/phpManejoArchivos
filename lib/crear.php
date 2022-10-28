<?php
$archivo='nuevo.txt';

fopen($archivo, 'w+');

$mensaje="Se creo el archivo";
header('location:../index.php');

?>