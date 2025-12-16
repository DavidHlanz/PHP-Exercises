<?php
    session_start();
    $_SESSION["type"] = $_POST["type"];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date & kind of visit</title>
</head>
<body>
    <h1>Choose the date and kind of visit</h1>
    <fieldset>
        <legend>Choose option</legend>
    <form action="examen3.php" method="POST">
        <label for="date">Asign a Date</label>
        <input type="date" name="date" id="date" require>
        <div></div>
        <label for="">With a guide</label>
        <input type="radio" name="guide" value="with">
        <div></div>
        <label for="">Without a guide</label>
        <input type="radio" name="guide" value="without">
        <div></div>
        <input type="submit" value="Continuar">
        <input type="reset">
    </form>
    </fieldset>
</body>
</html>