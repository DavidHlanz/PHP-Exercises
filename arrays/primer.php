<?php
 $drinks = array("Coffee","Tea","Water","Beer","Wine","Soft drink");
 echo "<h1>DRINKS</h1>";
 echo "<ul>";
 foreach ($drinks as $b) {
 echo "<li>", $b, "</li>";
 }
 echo "</ul>";
 var_dump($drinks);
 
?>