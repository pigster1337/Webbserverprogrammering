<html>
<head>
  <title>
    PHP Test
  </title>
  <meta charset="utf-8">
</head>

<body>

  <!-- Kommentar -->

  <?php
  //Detta är en kommentar

  /*Flera rader

  fd

  fd
  */
    $var = "HEJ";
    echo "<h1>My first PHP script! $var</h1>";
    echo "<h1>\"My first PHP script!\" $var</h1>";
    echo "<h1>My first PHP script! ".$var."</h1>";
    echo '<h1>My first PHP script! '.$var.'</h1>';
    echo '<h1>My first PHP script! $var</h1>';
    $i = 4;
    $j = 5;
    if ($j > $i)
    {
      echo "j är större";
    }
    else
    {
      echo "j är inte större";
    }

  ?>




</body>
</html>
