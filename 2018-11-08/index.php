<?php
include_once "settings.php"
 ?>
<html>
<head>
  <title>
    index.php
  </title>
  <meta charset="utf-8">
</head>

<body>

  <table border=2>
    <tr><th>Förnamn</th><th>Efternamn</th><th>Telefonnummer</th><th>Resultat</th></tr>

<?php

  $fnamn=$_POST['fnamn'];
  $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
  $stmt = $db->query("SELECT tb_users.fnamn,tb_users.enamn,tb_users.tfn,tb_resultat.resultat FROM tb_users,tb_resultat WHERE tb_users.nyckel=tb_resultat.foreign_key AND tb_users.fnamn='$fnamn'");
  if($row = $stmt->fetch())
  {

    echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td><td>".$row['resultat']."</td></tr>";

  }
 ?>

</table>


</body>
</html>
