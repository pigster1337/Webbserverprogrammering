<html>
<head>
  <title>
    Uppgift 8.8
  </title>
  <meta charset="utf-8">
</head>

<body>

  <form action="uppgift8.8.php" method="get">
    <input type="text" name="tal"><br>
    <input type="submit">
  </form>

<?php

  $tal = $_GET['tal'];
  echo $tal;

  ?>





</body>
</html>
