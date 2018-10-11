<html>
<head>
  <title>
    PHP Test
  </title>
  <meta charset="utf-8">
</head>

<body>



  <?php

  $array = array();

  for($a = 0; $a < 10; $a++)
  {

    $array[$a] = (rand(0,100));

  }

  for($i = 0; $i < 10; $i++)
  {

    echo "$array[$i]<br>";
  }

  ?>




</body>
</html>
