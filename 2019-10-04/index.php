<html>
<head>
  <title>
    PHP Test
  </title>
  <meta charset="utf-8">
</head>

<body>

<?php

    $a = array("TYP", "ARRAY", "ALLTSÅ");
    $langd = count($a);
    echo $langd;
    echo "<br><br>";

    for ($i = 0; $i<$langd; $i++)
    {

      echo $a[$i]."   ";

    }

    echo "<br><br>";

    array_push($a, "Förstår du?");
    $langd = count($a);

    for ($i = 0; $i<$langd; $i++)
    {

      echo $a[$i]."   ";

    }

    echo "<br><br>";

    foreach ($a as $nyckel => $value)
      echo $nyckel." ".$value."<br>";

      echo "<br><br>";


    $b = array("Sverige"=>"Stockholm", "GAIS"=>"Bäst", "Glass"=>"Gott");

    foreach ($b as $nyckel => $value)
    {
      if($nyckel=="GAIS")
      echo $nyckel." ".$value."<br>";
    }



  ?>





</body>
</html>
