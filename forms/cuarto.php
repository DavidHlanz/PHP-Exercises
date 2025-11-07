<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $roles = $_POST['roles'];

        if (empty($name)){
            echo "El nombre esta vacio";
        }
        if (empty($mail)){
            echo "El mail esta vacio";
        }
        echo "your role(s) are: ";
        
        foreach($roles as $role){
            echo $role . ", ";
        }
    ?>
</body>
</html>