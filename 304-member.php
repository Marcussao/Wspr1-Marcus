<?php
session_start();
 if (!$_SESSION['logged_in'] == true){
    header('Location: 304-login.php');
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Uppgift 3.04-Member</title>

</head>
<body>
    <h1>Du är inloggad</h1>
</body>
</html>