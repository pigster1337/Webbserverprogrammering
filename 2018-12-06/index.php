<?php

session_start()
 ?>

<!DOCTYPE html>
<html>


<head>
  <title>
    PHP Test
  </title>
  <meta charset="utf-8">
</head>

<body>

<form action="index2.php" method="post">
  <input type="hidden" name="color" value="En grön">
  <input type="submit" value="Skicka nu!">
</form>

<?php

$_SESSION['bil'] = "FIAT";


 ?>

 <a href="index2.php">Klicka</a>



</body>
</html>
