<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <title>Programmering</title>
</head>
<body>

<form action="index.php" method="get">
  <input type="text" name="tal1"><br>
  <input type="text" name="tal2"><br>
  <input type="submit">
</form>


<?php

  echo "Tal 1 = ".$_GET['tal1']."<br>";
  echo "Tal 2 = ".$_GET['tal2']."<br><br>";
  $Tal1 = $_GET['tal1'];
  $Tal2 = $_GET['tal2'];
  echo "Tal 1 = ".$Tal1."<br>";
  echo "Tal 2 = ".$Tal2."<br><br>";
  $summa = $Tal1 + $Tal2;
  echo "Summan är $summa<br>";





?>

</body>
</html>
