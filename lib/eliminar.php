<?php
$archivo='nuevo.txt';
unlink($archivo);

header('location:../index.php');

?>