<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    function password_generator($length) {

        $letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";



        for($i = 0; $i < $length; $i++ ) {

            $password .= $letters[random_int(0, strlen($letters) - 1)];
            
        }

        echo $password;

    }

?>
    
<form action="">
    <input type="number" name="length">
    <button type="submit">Invia</button>
</form>

<?php password_generator($_GET['length']) ?>

</body>
</html>