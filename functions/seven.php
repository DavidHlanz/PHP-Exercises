<?php
function area($base, $height){
    return ($base * $height);
}
function perimeter($base, $height){
    return 2 * ($base + $height);
}

function interchange(&$base, &$height){
    $aux = $base;
    $base = $height;
    $height = $aux;
}

$base = 5;
$height = 10;
echo "Area: " . area($base, $height), "<br>";
echo "Perimeter: " . perimeter($base, $height), "<br>";
interchange($base, $height);
echo "Base now: ", $base, " Height now: ", $height;
?>