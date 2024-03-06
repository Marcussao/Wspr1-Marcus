<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Uppgift 3.03s</title>

</head>
<body>

<?php
if(isset($_POST['surname']) && isset($_POST['lastname']) && isset($_POST['age'])) {

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <p>First name: <?php echo $_POST['surname']; ?></p>
    <p>Last name: <?php echo $_POST['lastname']; ?></p>
    <p>Age: <?php echo $_POST['age']; ?></p>
<?php
} else {

?>
    <h1>Frågor:</h1>
    <!-- Formulär för frågorna -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="color"></label>
        <input type="text" name="surname" id="surname" placeholder="Förnamn">
        <input type="text" name="lastname" id="lastname" placeholder="Efternamn">
        <input type="text" name="age" id="age" placeholder="Ålder">
        <button type="submit">Submit</button>
    </form>
<?php
}
?>
</body>
</html>