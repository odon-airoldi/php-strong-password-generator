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
    <div>
        <label for="uppers">Lunghezza password</label><br>
        <input type="number" name="length">
    </div>
    <div>
        <input type="checkbox" id="uppers" name="uppers" value="true">
        <label for="uppers">Lettere maiuscole</label>
    </div>
    <div>
        <input type="checkbox" id="numbers" name="numbers" value="true">
        <label for="numbers">Numeri</label>
    </div>
    <div>
        <input type="checkbox" id="symbols" name="symbols" value="true">
        <label for="symbols">Caratteri speciali</label>
    </div>
    <button type="submit">Invia</button>
</form>

<?php password_generator($_GET["length"], $_GET["uppers"], $_GET["numbers"], $_GET["symbols"]); ?>

<?php if (isset($_SESSION["password"])) {

    header("Location: result.php");

} ?>

</body>
</html>