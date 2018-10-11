<html>
<head>
  <title>
    PHP Test
  </title>
  <meta charset="utf-8">
</head>

<body>

  <form name="mittFormular" action="uppgift1.php" method="get">
    <p>Tal 1 <input type="number" name="tal1"></p>
    <p>Tal 2 <input type="number" name="tal2"></p>
    <select name="val">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
    </select>
    <br>
    <input type="submit" value="Beräkna">
  </form>

  <?php

    $tal1 = $_GET['tal1'];
    $tal2 = $_GET['tal2'];
    $raknesatt = $_GET['val'];
    $total;

    if($raknesatt == '+')
    {
      $total = $tal1 + $tal2;
      echo "$total<br>";
    }
    else if($raknesatt == '-')
    {
      $total = $tal1 - $tal2;
      echo "$total<br>";

    }
    else if($raknesatt == '*')
    {
      $total = $tal1 * $tal2;
      echo "$total<br>";

    }
    else if($raknesatt == '/')
    {
      $total = $tal1 / $tal2;
      echo "$total<br>";

    }

  ?>




</body>
</html>
