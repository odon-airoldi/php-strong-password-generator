<?php

require './function.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form>
    <input type="number" name="length">
    <label for="uppers">Lettere maiuscole</label>
    <input type="checkbox" name="uppers" value="true">
    <label for="uppers">Numeri</label>
    <input type="checkbox" name="numbers" value="true">
    <label for="uppers">Caratteri speciali</label>
    <input type="checkbox" name="symbols" value="true">
    <button type="submit">Invia</button>
</form>

<?php password_generator($_GET["length"], $_GET["uppers"], $_GET["numbers"], $_GET["symbols"]); ?>

<?php if (isset($_SESSION["password"])) {

    header("Location: result.php");

} ?>

</body>
</html>