<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pedido Hecho ✅</title>
</head>
<body>
  <?php
  session_start();
  $_SESSION['name'] = $_POST['Nombre'];
  $_SESSION['recogerollevar'] = $_POST['entrega'];
  $_SESSION['content'] = $_POST['contenido'];

  echo "Hola ". $_SESSION['name']. ", tu pedido esta listo:  ". $_SESSION['recogerollevar']. "<br>";
  echo "Contenido: ";
  foreach($_SESSION['content'] as $ingrediente){
    echo $ingrediente . ", ";
  } 
  
  ?>
</body>
</html>