<html>
<head>
  <title>
    Uppgift 9.5
  </title>
  <meta charset="utf-8">
</head>

<body>

  <form action="uppgift9.5.php" method="get">
    <input type="text" name="tal"><br>
    <input type="submit" value="Submit Query">
  </form>


<?php

  echo $_GET['tal'];
  echo "<br><br>";
  $tal=$_GET['tal'];
  siffra($tal);

 ?>




</body>
</html>

<?php
  function siffra($x)
  {
      if(is_numeric($x))
      {
        echo "$x är en siffra<br>";

      }

      else
      {
        echo "$x är ingen siffra<br>";
      }

  }


 ?>
