





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles</title>
</head>
<body>
    <?php
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $roles = $_POST['roles'];
        echo "your name is $name <br>";
        echo "your email is $mail <br>";
        echo "your role(s) are: ";
        foreach($roles as $role){
            echo $role . ", ";
        }
    ?>
</body>
</html>