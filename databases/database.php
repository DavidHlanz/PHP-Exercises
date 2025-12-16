<?php
 $server = "localhost";
 $user = "root";
 $password = "";
 try {
 $connection = new PDO("mysql:host=$server", $user, $password);
 $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql = "DROP DATABASE IF EXISTS Library;";
 $connection->query($sql);
 $sql = "CREATE DATABASE Library";
 $connection->query($sql);
 $sql = "USE Library";
 $connection->query($sql);
 $sql = "CREATE TABLE IF NOT EXISTS Books(idb int PRIMARY KEY, name varchar(30),type varchar(15))";
 $connection->query($sql);
 $sql = "CREATE TABLE IF NOT EXISTS Readers(idr int PRIMARY KEY,name varchar(30),age int)";
 $connection->query($sql);
 $sql = "CREATE TABLE IF NOT EXISTS Lendings(idp int, idr int, idb int, FOREIGN KEY(idb) REFERENCES Books(idb), FOREIGN KEY(idr) REFERENCES Readers(idr))";
 $connection->query($sql);
 $sql = "INSERT INTO Books (idb, name, type) values (1, 'Romancero Gitano', 'Clasico')";
 $connection->query($sql);
 $sql = "INSERT INTO Readers (idr, name, age) values (1, 'Manolo', 40)";
 $connection->query($sql);
 
 echo "Hecho todo";
 }
 catch (PDOException $exception){
 echo "The connection failed.", $exception->getmessage();
 }
?>

