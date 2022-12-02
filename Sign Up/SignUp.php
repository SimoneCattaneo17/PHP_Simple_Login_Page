<!DOCTYPE html>
<link rel="StyleSheet" href="../CSS/style.css">
<meta charset="utf-8" />
<title>
    Registration
</title>

<html>
    <body>
        <div class="center">
            <form action="./Write.php" method="post">
                <label for="fname">Username:</label><br>
                <input type="text" id="uname" name="uname"><br>
                <label for="lname">Password:</label><br>
                <input type="password" id="pass" name="pass"><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email"><br>
                <label for="cf">Codice Fiscale:</label><br>
                <input type="text" id="cf" name="cf"><br><br>
                <input type="submit" id="SignUp" value="Sign Up">
            </form>
        </div>
    </body>
</html>