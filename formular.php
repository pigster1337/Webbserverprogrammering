<html>
<head>
  <title>
    PHP Test
  </title>
  <meta charset="utf-8">
</head>

<body>

<form action="formular.php" method="get">
  <input type="text" name="firstname">
  <input type="text" name="lastname">
  <input type="submit" value="SKICKA">
</form>

<?php


//superglobal variabel
echo "Förnamn: ".$_GET['firstname'];



 ?>




</body>
</html>
