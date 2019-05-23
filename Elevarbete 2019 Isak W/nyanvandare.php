
<?php
  session_start();
  include_once "settings.php";



?>
<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8">
      <title>Ny användare</title>

   </head>
   <body>

<form action="tillagd.php" method="post">
  <input type="text" name="username" value="Användarnamn"><br>
  <input type="text" name="password" value="Lösenord"><br>
  <input type="text" name="Förnamn" value="Förnamn"><br>
  <input type="text" name="Efternamn" value="Efternamn"><br>
  <input type="text" name="Tfn" value="Telefonnummer"><br>
  Admin: <input type="checkbox" name="Admin" value="1"><br><br>
  <input type="submit" value="OK!"><br><br>
</form>





<a href="valkommen.php">Tillbaka</a><br>
<a href="loggaut.php">Logga ut</a>

   </body>
   </html>
