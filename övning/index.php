<?php
session_start();
include_once "settings.php"
?>
<!DOCTYPE html>
<html>
<head>
  <title>
    index
  </title>
  <meta charset="utf-8">
</head>

<body>


  <?php

  $anvn = $_POST['anvn'];
  $losen = $_POST['losen'];


   $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
   $stmt = $db->query("SELECT anvandrnamn,losenord FROM tb_users WHERE anvandrnamn = '$anvn' AND losenord = '$losen'");
   if($row = $stmt->fetch())
      {

        $_SESSION['inloggad'] = "sant";
        //echo "HITTAS<br>";


      }
    else
        {

           $_SESSION['inloggad'] = "falskt";
           //echo "HITTAS INTE<br>";


        }
  ?>

  <form action="../övning/index2.php">
    <input type="submit" value="Vidare">
  </form>




</body>
</html>
