<?php
$palabra = "anilina";

$contar = strlen($palabra);

$inicializar = 0;

while($palabra[0] == $palabra[$contar-1]){
    $inicializar ++;
    $contar --;
    echo "Es palindromo jefe";
}else{
    echo "No lo es"
}

//bad...



    


?>