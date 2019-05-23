<html>
<?php
include_once "settings.php"
 ?>
<head>
  <title>
    PHP Test
  </title>
  <meta charset="utf-8">
</head>

<body>


  <?php

    $fnamn=$_POST['fnamn'];
    $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
    $stmt = $db->query("SELECT tb_users.fnamn,tb_users.enamn,tb_users.tfn,tb_resultat.resultat FROM tb_users,tb_resultat WHERE tb_users.nyckel=tb_resultat.foreign_key AND tb_users.fnamn='$fnamn'");
    if($row = $stmt->fetch())
    {

      echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td><td>".$row['resultat']."</td></tr>";

    }
   ?>




</body>
</html>
