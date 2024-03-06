<?php
session_start();

 if (!$_SESSION['logged_in'] == true){
    header('Location: 305-login.php');
 }

?>

<?php
if (isset($_COOKIE['login_status']) && $_COOKIE['login_status'] == 'true'){
  echo "Cookies are enabled.";
} else {
  header('Location: 305-login.php');
    exit();
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Uppgift 3.05-Member</title>

</head>
<body>
    <h1>Du är inloggad</h1>
</body>
</html>