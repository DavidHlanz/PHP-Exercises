<?php
    $coches = array('25', '134', '32', '23');
    echo "El valor mas bajo es: " . min($coches) . "<br>";
    echo "El valor mas alto es: " . max($coches) . "<br>";
    echo "El valor medio es: " . array_sum($coches) / count($coches);

?>