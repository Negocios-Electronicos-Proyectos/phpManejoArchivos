<?php
$abrir= fopen('texto.txt','r+');

//fopen, fread, filesize, fwrite

$archivo='texto.txt';
$size=filesize($archivo);
echo "<br>";
//echo $size;

//Leer el archivo
$leer=fread($abrir,$size);
$escribir=fwrite($abrir, 'Saludos...');

echo $leer;

fclose($abrir);

?>