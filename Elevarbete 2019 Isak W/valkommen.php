<?php
  session_start();
  if (!$_SESSION['inloggad'])
  {
    $_SESSION['fel'] = "<h2>Du får inte vara här</h2><a href=\"loggain.php\">Logga in</a>";
    header("location:fel.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8">
      <title>Välkommen</title>
      <style>
      table {
          border-collapse: collapse;
      }
      td {
        border-style: solid;
        border-width: 2px;
        padding: 3px;
      }
     </style>
   </head>
   <body>

<h1>Välkommen <?php echo $_SESSION['Förnamn'] ?><?php echo "  "?><?php echo  $_SESSION['Efternamn']."!" ?></h1>
<p>Till <a href="adminkontroll.php">Medlemsregistret</a></p>
<p>Lägg till <a href="adminkontroll2.php">Ny Användare</a></p>


<a href="loggaut.php">Logga ut</a>

   </body>
   </html>
