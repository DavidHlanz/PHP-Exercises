<?php
function triple(&$number){
    $number = $number * 3;
}

$num = 2;
triple($num);
echo $num;
?>