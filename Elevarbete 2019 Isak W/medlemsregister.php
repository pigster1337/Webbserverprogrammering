<?php
  session_start();
  include_once "settings.php";

?>
<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8">
      <title>Medlemsregister</title>
      <style>
      table {
          border-collapse: collapse;
      }
      td {
        border-style: solid;
        border-width: 1px;
        padding: 8px;
      }
     </style>
   </head>
   <body>

     <h1>Välkommen till medlemsregistret!</h1>
     <br><br>
<form action="filtrerat.php" method="post">
    Välj:
      <select name="Val">
        <option value="Förnamn">Förnamn</option>
        <option value="Efternamn">Efternamn</option>
        <option value="Tfn">Telefonnummer</optiom>
        </select>
      <br>
    Exakt matchning:
    <input type="radio" name="matchning" value="exakt"><br>
    Partiell matchning:
    <input type="radio" name="matchning" value="partiell"><br>
    Filtrera:
    <input type="text" name="filter"><br>
     <input type="submit" value="OK"><br>
   </form>
<br><br>


<table>
  <tr><td>Förnamn</td><td>Efternamn</td><td>Telefon</td></tr>

  <?php


  $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
  $stmt = $db->query("SELECT Förnamn,Efternamn,Tfn FROM tb_medlemmar");
  while($row = $stmt->fetch())
  {

    echo "<tr><td>".$row['Förnamn']."</td><td>".$row['Efternamn']."</td><td>".$row['Tfn']."</td></tr>";


  }




 ?>

</table>

<?php echo "<br><br>"?>
<a href="valkommen.php">Tillbaka</a><br>
<a href="loggaut.php">Logga ut</a>

   </body>
   </html>
