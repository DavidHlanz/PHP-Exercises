<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    echo "Hello, ",$_SESSION["name"], " ", $_SESSION["surname"];
    ?>
</body>
</html>