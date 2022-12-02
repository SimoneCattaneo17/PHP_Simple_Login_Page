<!DOCTYPE html>
<link rel="StyleSheet" href="./CSS/style.css">
<meta charset="utf-8" />

<html>
    <body>
        <?php
        require __DIR__ . "/Login/login.php";

        $username = $_POST['uname'];
        $password = $_POST['pass'];
            if(login($username, $password)){
                echo "<h1> Login eseguito con successo </h1>";
                echo "<h3>Utente: " . $username . "</h3>";
                echo "<a href='./5ID/5ID.php'>Visualizza 5ID</a><br>";
            }
            else {
                echo "<h1> Credenziali inesatte </h1>";
                echo "";
            }
        ?>

        <button onclick="location = './index.php'">
            return to login page
        </button>

    </body>
</html>