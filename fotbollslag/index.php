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
    <tr><th>Förnamn</th><th>Efternamn</th><th>Fotbollslag</th></tr>

<?php

  $fnamn=$_POST['fnamn'];



  $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
  $stmt = $db->query("SELECT fnamn,enamn,fotbollslag FROM tb_users WHERE fnamn='$fnamn'");
  while($row = $stmt->fetch())
  {

    echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['fotbollslag']."</td></tr>";


  }



 ?>



</table>


<a href="formular.php">Tillbaka till sökning</a>
<br><a href="formular2.php">Tillbaka till insättning</a>


</body>
</html>
