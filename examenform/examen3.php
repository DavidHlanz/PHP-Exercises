<?php
    session_start();
    $_SESSION["date"] = $_POST["date"];
    $_SESSION["guide"] = $_POST["guide"]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last questions</title>
</head>
<body>
    <h1>How many visitors and info</h1>
    <form action="final.php" method="POST">
        <label for="visitors">Number of visitors(<?php
        
        echo $_SESSION["type"];
        
        ?>)
        </label>
        <?php
        
        if($_SESSION["type"] == "Group"){
            echo "<input type='number' min='25' name='people'>";
        }else{
            echo "<input type='number' min='1' name='people'>";
        }
        
        ?>
        <div></div>
        <label for="email">Email</label>
        <input type="email" name="email">
        <div></div>
        <label for="tel">Telephone</label>
        <input type="tel" name="tel">
        <div></div>
        <input type="submit" value="Finish">
        <input type="reset"
    </form>
</body>
</html>