<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["surname"] = $_POST["surname"];
    ?>
    <p>Saved!</p>
    <a href="tres.php">Results</a>
</body>
</html>