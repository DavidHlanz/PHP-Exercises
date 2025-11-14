<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen David</title>
</head>
<body>
    <?php
    //create array asociative for library data of each person (names, surname, dni, years, tel, address)
    $librery = array(
        array("names"=> "Dani", "surname" => "Gomez Lopez", "dni" => "74348781", "years" => "2004", "telephone" => "738137499", "address" => "Calle Mariana Pineda s/n"),
        array("names"=> "Jose", "surname" => "Jimenez Alvarez", "dni" => "37472473", "years" => "2002", "telephone" => "473646228", "address" => "Calle Zaidin Vergeles Pineda s/n"),
        array("names"=> "Luis", "surname" => "Arrabal del Valle", "dni" => "28472847", "years" => "2006", "telephone" => "482646284", "address" => "Calle Reyes Catolicos s/n"),
        array("names"=> "Pepe", "surname" => "Padial Revilla", "dni" => "68478847", "years" => "2007", "telephone" => "834636462", "address" => "Calle Jose Pina s/n")
    );
    //create a array to input the leters and later use a for to index all of the in order of numbers
    $letres = array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");

    //now create the table headers of table
    echo "<table>";
    echo "<tr>
            <th>DNI</th>
            <th>Surname</th>
            <th>Name</th>
          </th>";
    
    //foreach to get the years and if born after 2004 show im
    foreach($librery as $year => $value){
        if($value["years"] > 2004){
            echo "<tr> <td>";
            //value of i is 0 and increment while the dni div 23 == value of i
            $i = 0;
            do{
                $i++;
            }
            while($value["dni"] % 23 != $i);
            //show the dni and the letter
            echo  $value["dni"] . $letres[$i];
            echo "</td><td>";
            //show the surnames
            echo $value["surname"];
            echo "</td><td>";
            //show the names
            echo $value["names"];
            echo "</td></tr>";
        }
    };
    echo "</table>";
    ?>
</body>
</html>