<?php
$numero = 9;
$esPrimo = true;

for($i = 2; $i * $i <= $numero; $i++){
    if($numero % $i == 0){
        $esPrimo = false;
        break;
    } 
}

if($esPrimo){
    echo "Es primo";
}else{
    echo "No es primo";
}
?>