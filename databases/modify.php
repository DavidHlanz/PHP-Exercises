<?php
include "access.php";
$connection = new PDO($dsn, $user, $password);
 $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql = "UPDATE Readers SET Telephone=? WHERE idr=?;";
 $statement = $connection->prepare($sql);
 $statement->bindParam(1, $tel);
 $statement->bindParam(2, $id);
 $tel = 655998877;
 $id = 1;
 $statement->execute();
 echo "The reader with id ", $id, " has this new telephone number ", $tel, ".";
?>