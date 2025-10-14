<?php

$ventas = array(150.50, 200.75, 180.00, 220.40, 175.25, 300.00, 250.10, 190.00, 210.30, 260.90, 230.00, 310.50, 280.20, 195.75, 210.60);

$total = array_sum($ventas);

echo "EL total de dinero es " . number_format($total, 2);

?>