<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uppgift 3.07</title>
</head>
<body>

    <?php
    $uploadFolder = "uploads/";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["fileToUpload"])) {
        if ($_FILES["fileToUpload"]["size"] <= 500 * 1024) {
            $allowedTypes = ["image/png"];
            if (in_array($_FILES["fileToUpload"]["type"], $allowedTypes)) {
                $uploadPath = $uploadFolder . basename($_FILES["fileToUpload"]["name"]);
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $uploadPath)) {
                    echo "Filen har laddats upp och sparats i mappen uploads.";
                } else {
                    echo "Det uppstod ett fel vid uppladdningen.";
                }
            } else {
                echo "Endast PNG-filer är tillåtna.";
            }
        } else {
            echo "Filen är för stor. Maximal storlek är 500 kB.";
        }
    }
    ?>

    <form action="307.php" method="post" enctype="multipart/form-data">
        Välj fil att ladda upp (max 500 kB och endast PNG):
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Ladda upp fil" name="submit">
    </form>

</body>
</html>