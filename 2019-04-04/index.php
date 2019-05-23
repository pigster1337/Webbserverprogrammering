<?php
  session_start();

  if ((isset($_POST['name'])) && (strlen($_POST['name'] > 0) && (strlen($_POST['name'])) <= 15))
  {

    $username = strip_tags($_POST['name']);
    if (preg_match("/[s \\ \/]/",$username))
    {

      $_SESSION['fel'] = "Användarnamn felaktigt";
      header("location:fel.php");
      exit();

    }

  }
  else
  {

      $_SESSION['fel'] = "Användarnamnet är för kort eller för långt";
      header("location:fel.php");
      exit();

  }

// -------------------------------------------------------------------



  if (isset($_POST['password']) && (strlen($_POST['password'] > 0) && (strlen($_POST['password'])) <= 15))
  {

    $password = strip_tags($_POST['password']);
    if (preg_match("/[s \\ \/]/",$password))
    {

      $_SESSION['fel'] = "Lösenord felaktigt";
      header("location:fel.php");
      exit();

    }
    exit();
  }
  else
  {

      $_SESSION['fel'] = "Lösenordet är för kort eller för långt";
      header("location:fel.php");
      exit();

  }

  $_SESSION['fel'] = "Utmärkt";
  header("location:fel.php");


 ?>
