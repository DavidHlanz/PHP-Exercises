<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "<p> Suma: ", $_POST['uno'] + $_POST['dos'] , "</p>"; 
        echo "<p> Resta: ", $_POST['tres'] - $_POST['cuatro'] , "</p>";
    ?>
</body>
</html>