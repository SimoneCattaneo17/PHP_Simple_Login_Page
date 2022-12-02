<!DOCTYPE html>
<link rel="StyleSheet" href="./CSS/style.css">
<meta charset="utf-8" />
<title>
    Success
</title>

<html>
    <body>
        <?php
            $uname = $_POST['uname'];
            $password = $_POST['pass'];
            $email = $_POST['email'];
            $cf = $_POST['cf'];

            if($uname != "" and $password != "" and $email != "" and $cf != "") {
                $file = fopen("../Login/archive.txt", "a");
                fwrite($file, $uname . "," . $password . "," . $email . "," . $cf . "\n");

                echo "<h1> Registration successful! </h1>";
            }
            else {
                echo "<h1> You have to fill each box! </h1>";
            }
        ?>

        //criptazione
        //https://www.geeksforgeeks.org/how-to-encrypt-and-decrypt-a-php-string/

        <button onclick="location = '../index.php'">
            return to home page
        </button>
    </body>
</html>