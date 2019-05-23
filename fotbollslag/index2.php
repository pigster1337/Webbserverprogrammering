<?php
include_once "settings.php"
 ?>
<html>
<head>
  <title>
    index.php
  </title>
  <meta charset="utf-8">
</head>

<body>

<?php




  $fnamn2=$_POST['fnamn2'];
  $enamn2=$_POST['enamn2'];
  $fotbollslag2=$_POST['fotbollslag2'];

  $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
  $stmt = $db->query("INSERT INTO `tb_users` (`fnamn`, `enamn`, `fotbollslag`) VALUES ('$fnamn2','$enamn2','$fotbollslag2')");
  if($row = $stmt->fetch())
  {}

  echo "Insatt!";


 ?>





<br><a href="formular.php">Tillbaka till sökning</a>
<br><a href="formular2.php">Tillbaka till insättning</a>


</body>
</html>
