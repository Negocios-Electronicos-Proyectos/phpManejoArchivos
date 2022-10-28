<?php

function contador(){
    $archivo ='contador.txt';
    $abrir=fopen($archivo, 'r+');
    $size=filesize($archivo);
    $leer=fread($abrir, $size);
    $contenido=$leer+1;
    $posicion=ftell($abrir);

    if($posicion = $size){
        fseek($abrir, 0);
    }
    fwrite($abrir, $contenido);
    fclose($abrir);

    return($contenido);

}

echo contador();


