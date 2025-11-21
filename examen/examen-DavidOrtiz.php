<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    A librery recorded all its readers' names, surnames, DNI without letter, years of birth, telephone
    numbers and addresses. Write a script to deliver a table showing the DNI with a letter, the surnames
    and the name and of those readers who were born after 2004, bearing in mid that the letter of an DNI
    can be calculated bu this algorithm:
    
    1. Divide the number by 23
    2. Take the remainder and look for its letter in this table:
        Remainter: 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22
        Letter:    T, R, W, A, G, M, Y, F, P, D, X,  B,  N,  J,  Z,  S,  Q,  V,  H,  L,  C,  K,  E
    */
    
    $librery = array(
        array("name" => "paco", "surnames" => "jimenez cruz", "dni" => "446382472", "years" => 2004, "telephone" => 384726477, "address" => "Calle Larios 1"),
        array("name" => "javier", "surnames" => "arrabal del valle", "dni" => "474674633", "years" => 2006, "telephone" => 374827462, "address" => "Calle paz 2"),
        array("name" => "Mario", "surnames" => "padial", "dni" => "837482742", "years" => 2007, "telephone" => 284726483, "address" => "Calle cruz 2")
    );

    function DniConLetra($dni){
        $letters = array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");
        $remainder = $dni % 23;
        $result = $letters[$remainder];
        return $dni . $result;
    };

    echo "<table>
                <tr>
                    <th>DNI</th>
                    <th>Surnames</th>
                    <th>Name</th>
                </tr>";
    foreach($librery as $reader){
        if($reader['years'] > 2004){
            echo "<tr>";
            echo "<td>",DniConLetra($reader['dni']),"</td>";
            echo "<td>",$reader['surnames'],"</td>";
            echo "<td>",$reader['name'],"</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
    ?>
</body>
</html>