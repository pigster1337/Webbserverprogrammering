<?php
session_start();
$username=$_SESSION['username'];
$password=$_SESSION['password'];
include_once "settings.php";

try {
   $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
    $stmt = $db->query("SELECT * FROM tb_medlemmar WHERE username='$username' AND password='$password' LIMIT 1");
    if ($row = $stmt->fetch())
    {

             header("location:valkommen.php");
             $_SESSION['inloggad'] = true;
             $_SESSION['username'] = $row['username'];
             $_SESSION['Förnamn'] = $row['Förnamn'];
             $_SESSION['Efternamn'] = $row['Efternamn'];
             $_SESSION['Tfn'] = $row['Tfn'];
             $_SESSION['Admin'] = $row['Admin'];
             exit();

    }
    else
    {
        $_SESSION['fel'] = "<h2>22Användarnamnet och/eller lösenordet hittas inte</h2><a href=\"loggain.php\">Logga in</a>";
              header("location:fel.php");
              exit();
    }
 }
catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    die();
    $_SESSION['fel'] = "Något gick fel med databasen";
    header("location:fel.php");
    exit();
 }
$pdo = null;
header("Location: valkommen.php");
?>
<!-- Det finns en säkerhetsrisk med inloggningen samt
möjlighet att komma in på sidor man inte ska vara på
genom att använda URL, hinner inte åtgärda pga tidsbrist. -->
