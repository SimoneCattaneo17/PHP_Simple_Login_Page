<?php
    function login($uname, $pass) {
        $lines = file(__DIR__ . "/archive.txt");
        foreach ($lines as $line) {
            $user = explode(",", $line);
            if ($user[0] == $uname and $user[1] == $pass) {
                return true;
            }
        }
        return false;
    }
?>

