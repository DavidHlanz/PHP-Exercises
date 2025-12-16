<?php
    session_start();
    $_SESSION["people"] = $_POST["people"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["tel"] = $_POST["tel"];
    setcookie("email", $_SESSION["email"], time() + 3600 * 48, "/"); /*48 hours is saved because when u visit a city and go to museums its rare 
                                                                    to edit the tickets 48 hours later*/
    setcookie("telephone", $_SESSION["tel"], time() + 3600 * 48, "/"); //48 hours is saved
    setcookie("date", $_SESSION["date"], time() + 3600 * 48, "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final summary</title>
</head>
<body>
    <?php
    $total = 0;
    
    if($_SESSION["type"] == "Individual" and $_SESSION["guide"] == "without"){
        $total = 15 * $_SESSION["people"];
    }
    if($_SESSION["type"] == "Individual" and $_SESSION["guide"] == "with"){
        $total = 25 * $_SESSION["people"];
    }
    if($_SESSION["type"] == "Group" and $_SESSION["guide"] == "without"){
        $total = 10 * $_SESSION["people"];
    }
    if($_SESSION["type"] == "Group" and $_SESSION["guide"] == "with"){
        $total = 15 * $_SESSION["people"];
    }
    echo "Tickets for " . $_SESSION["people"] . " people " . $_SESSION["guide"] . " a guide, " . $_SESSION["date"] . ": " . $total . "€";
    
    ?>
</body>
</html>