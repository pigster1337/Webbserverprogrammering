<html>
<head>
  <title>
    Array
  </title>
  <meta charset="utf-8">
</head>

<body>

  <?php

    $a = array("fo", "bar", 4.4,5);
    var_dump($a);
    echo "<br>";
    print_r($a);
    echo "<br><br>";

    $a[] = "Nytt värde";
    var_dump($a);
    echo "<br>";
    print_r($a);
    echo "<br><br>";

    $b = array("Sverige"=>"Stockholm", "Norge"=>"Oslo");
    var_dump($b);
    echo "<br>";
    print_r($b);
    echo "<br><br>";

    $b[]="Köpenhamn";
    var_dump($b);
    echo "<br>";
    print_r($b);
    echo "<br><br>";

    $c = array("3"=>"Hej", "4"=>"på");
    var_dump($c);
    echo "<br>";
    print_r($c);
    echo "<br><br>";

    $c[]="dig";
    var_dump($c);
    echo "<br>";
    print_r($c);
    echo "<br><br>";

    echo $c[5];
    echo "<br>";
    echo $b["Sverige"];
    echo "<br>";




   ?>


</body>
</html>
