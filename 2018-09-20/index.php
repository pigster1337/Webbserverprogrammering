<html>
<head>
  <title>
    Index
  </title>
  <meta charset="utf-8">
</head>

<body>

<?php
  /*$foo = 1;
  echo $foo;

  $bar = 2;
  echo $bar;

  $bar = $foo;
  echo $bar;

  $bar = & $foo;
  echo $bar;*/

  $bar = 1;
  echo '$bar '.$bar."<br>";
  echo '$bar är 1<br>';
  $foo = & $bar;
  echo '$foo '.$foo."<br>";
  echo '$bar och $foo delar minnesplats<br>';
  $bar = 2;
  echo '$foo '.$foo."<br>";
  echo '$bar ändrar värde, $foo ändrar värde<br><br><br>';

  if(2==2)
  {
    echo "sant<br>";
    echo test("HEJ");

  }

  function test($h)
  {

    echo "$h från test<br>";
    return;
  }


 ?>




</body>
</html>
