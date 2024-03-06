<?php
session_start();

$CorrectUsername = 'admin';
$CorrectPassword = '123';

if(isset($_POST['username']) && isset($_POST['password'])) {


    $Username = $_POST['username'];
    $Password = $_POST['password'];

    if ($Username === $CorrectUsername && $Password === $CorrectPassword) {
        $_SESSION['logged_in'] = true;
  
        header('Location: 304-member.php');
        exit;
    } else {
        echo 'Fel användarnamn eller lösenord';
    }
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Uppgift 3.04-Login</title>
    <style>
        body {
            padding: 30px 180px;
            text-align: center;
        }
    </style>

</head>
<body>

<h1>Inloggning:</h1>
    <!-- Formulär för frågorna -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="color"></label>
        <input type="text" name="username" id="username" placeholder="Användarnamn">
        <input type="text" name="password" id="password" placeholder="Lösenord">
        <button type="submit">Logga in</button>
    </form>

</body>
</html>