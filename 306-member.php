<?php
session_start();

if (!$_SESSION['logged_in'] == true){
    header('Location: 306-login.php');
    exit();
}

if (isset($_COOKIE['login_status']) && $_COOKIE['login_status'] == 'true'){
} else {
    header('Location: 306-login.php');
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_note'])) {
    $note = $_POST['note'];
    $dateTime = date('(Y-m/d H:i'); 

    $file = 'notes.txt';
    $formattedNote = $dateTime . '): ' . $note;
    file_put_contents($file, $formattedNote . PHP_EOL, FILE_APPEND | LOCK_EX);
}


$notesFile = 'notes.txt';
if (file_exists($notesFile)) {
    $existingNotes = file($notesFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
} else {
    $existingNotes = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>

    <title>Uppgift 3.06-Member</title>
</head>
<body>
    <h1>Du är inloggad</h1>

    
    <form method="post" action="">
        <label for="note">Skriv anteckningar här:</label>
        <textarea name="note" id="note" rows="4" cols="50"></textarea>
        <br>
        <input type="submit" name="save_note" value="Spara anteckning">
    </form>


    <?php if (!empty($existingNotes)): ?>
        <h2>Anteckningar:</h2>
        <ul>
            <?php foreach ($existingNotes as $note): ?>
                <li><?php echo htmlspecialchars($note); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>