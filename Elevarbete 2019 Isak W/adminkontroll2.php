<?php

    session_start();
    if($_SESSION['Admin'] == 1)
    {

      header("location:nyanvandare.php");

    }
    else{

      header("location:valkommen.php");
    }

 ?>
