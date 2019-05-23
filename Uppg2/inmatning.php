<?php
include_once "settings.php"
?>
<!DOCTYPE html>
<html>
<head>
  <title>
    Inmatning
  </title>
  <meta charset="utf-8">
</head>

<body>


  <?php

  $lag = $_POST['lag'];
  $supporters = $_POST['supporters'];


   $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
   $stmt = $db->query("INSERT INTO tb_users ('lag', 'supporters') VALUES $lag, $supporters");
   ($row = $stmt->fetch())

  ?>

  <form action="../Uppg2/startsida.php">
    <input type="submit" value="Tillbaka">
  </form>




</body>
</html>
