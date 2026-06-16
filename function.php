<?php

    session_start();

    function password_generator($psw_length, $psw_uppers, $psw_numbers, $psw_symbols) {

        $lowers = "abcdefghijklmnopqrstuvwxyz";
        $uppers = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $numbers = "0123456789";
        $symbols = "!@#$%^&*()-_+=";

        $set = [$lowers];

        if (isset($_GET["uppers"])) {
            $set[] = $uppers;
        }

        if (isset($_GET["numbers"])) {
            $set[] = $numbers;
        }

        if (isset($_GET["symbols"])) {
            $set[] = $symbols;
        }

        for($i = 0; $i < $psw_length; $i++ ) {

            $select = $set[random_int(0, count($set) - 1)];

            $password .= $select[random_int(0, strlen($select) - 1)];
            
        }

        $_SESSION["password"] = $password;

    }

?>