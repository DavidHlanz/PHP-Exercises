<?php
    $precipitacion = array("Lunes" => 12.5, "Martes" => 0.0, "Miércoles" => 5.3, "Jueves" => 0.0, "Viernes" => 20.1, "Sábado" => 15.4, "Domingo" => 0.0);
    $suma = 0;
    foreach($precipitacion as $dias => $valor){
        $suma = $suma + $valor;
    }
    echo "la suma de precipitacion semanal es: $suma";

    foreach($precipitacion as $dia => $valor){
        echo "<br>" . $dia . " = " . $valor;
    }
?>