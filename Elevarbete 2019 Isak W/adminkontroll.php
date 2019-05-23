<?php

    session_start();
    if($_SESSION['Admin'] == 1)
    {

      header("location:medlemsregister_admin.php");

    }
    else{

      header("location:medlemsregister.php");
    }

 ?>
