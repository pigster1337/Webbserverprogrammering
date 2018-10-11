<html>
<head>
  <title>
    Uppgift 9.7
  </title>
  <meta charset="utf-8">
</head>

<body>

  <form action="uppgift9.7.php" method="get">
    <input type="text" name="tal"><br>
    <input type="submit" value="Submit Query">
  </form>

<?php

    $tal=$_GET['tal'];
    primtal($tal);

 ?>

</body>
</html>

<?php

    function primtal($x)
    {

      for($i = 2; $i < $x-1; $i++)
        {
          if( ($x % $i) == 0)
          {
          echo "Inget primtal";
          return;
          }

        }

echo "Ett primtal";

    }


 ?>
