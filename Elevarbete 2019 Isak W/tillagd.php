
<?php
  session_start();
  include_once "settings.php";



?>
<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8">
      <title>Tillagd</title>

   </head>
   <body>

<?php

    $username=$_POST['username'];
    $password=$_POST['password'];
    $förnamn=$_POST['Förnamn'];
    $efternamn=$_POST['Efternamn'];
    $tfn=$_POST['Tfn'];
    $admin=$_POST['Admin'];

    try {

  $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
  $sql = "INSERT INTO tb_medlemmar (username,password,Förnamn,Efternamn,tfn,Admin) VALUES ('$username','$password','$förnamn','$efternamn','$tfn','$admin')";
  $stmt= $db->prepare($sql);
  $stmt->execute();

} catch (PDOException $e) {

echo 'Connection failed: ' . $e->getMessage();

}

 ?>

<h1>Ny medled tillagd</h1>



<a href="valkommen.php">Tillbaka</a><br>
<a href="loggaut.php">Logga ut</a>

   </body>
   </html>
