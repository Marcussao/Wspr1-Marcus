<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Uppgift 3.01</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 1s ease;
        }
    </style>
</head>
<body>

<?php
    function getCurrentSeconds() {
        return date("s");
    }

    if (isset($_GET['color'])) {
        echo '<script>document.body.style.backgroundColor = "' . $_GET['color'] . '";</script>';
    }
?>

<h1>Välj en färg:</h1>
<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="color"></label>
    <input type="text" name="color" id="color" placeholder="t.ex. #FFC0CB eller rosa">
    <button type="submit">Välj</button>
</form>
<p><?php ?> </p>        
</body>
</html>