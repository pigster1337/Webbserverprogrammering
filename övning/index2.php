<?php
session_start();
?>
<html>
<head>
  <title>
    index2
  </title>
  <meta charset="utf-8">
</head>

<body>


  <?php

  $inloggad = $_SESSION['inloggad'];

  if($inloggad == "sant")
  {

    echo "Du har loggats in";
  }

  else if ($inloggad == "falskt")
  {
    echo "Fel användarnamn eller lösenord, ";
    

  }

  ?>





</body>
</html>
