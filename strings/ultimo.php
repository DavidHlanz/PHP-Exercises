<?php
    $marks = array(
        array("name" => "Fernandez Gil, Maria", "project" => 5, "activity" => 10, "exam" => 7),
        array("name" => "Padial Fernandez, Javier", "project" => 1, "activity" => 3, "exam" => 5),
        array("name" => "Lopez Sanchez, Cristian", "project" => 4, "activity" => 1, "exam" => 7)
    );
    
    function order($name){
        $newName = explode(", ", $name);
        return $newName[1] . " " . $newName[0];
    };

    echo "<table>
            <tr>
                <th>Name</th>
                <th>Term Mark</th>
            </tr>";
    
    foreach($marks as $student){
        echo "<tr> <td>";
        echo order($student["name"]);
        echo "</td> <td>";
        echo 0.15 * $student["activity"] + 0.35 * $student["project"] + 0.5 * $student["exam"];
        echo "</td> <tr>";
    };
    
    echo "</table>"

?>