<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <title>Programmering</title>
</head>
<body>

<form action="porto.php" method="get">
  <input type="text" name="vikt"><br>
  <input type="submit" value="Vad kostar det?">
</form>

<?php

  //echo $_GET['vikt']."<br>";
  $vikt = $_GET['vikt'];
  $pris;

  if ($vikt <= 20)
  {
    $pris = 5;
    echo "Ett brev som väger $vikt gram kostar $pris kronor";
  }

  else if($vikt <= 100)
  {
    $pris = 10;
    echo "Ett brev som väger $vikt gram kostar $pris kronor";
  }

  else if($vikt > 100)
  {
    $pris = 20;
    echo "Ett brev som väger $vikt gram kostar $pris kronor";
  }

  else
  {
    $pris = "Felaktigt invärde";
    echo "Ett brev som väger $vikt gram kostar $pris kronor";
  }



?>

</body>
</html>
