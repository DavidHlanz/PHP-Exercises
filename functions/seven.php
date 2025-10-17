<?php
function area($base, $height){
    return ($base * $height);
}
function perimeter($base, $height){
    return 2 * ($base + $height);
}

$base = 5;
$height = 10;
echo "Area: " . area($base, $height) . "\n";
echo "Perimeter: " . perimeter($base, $height) . "\n";
?>