<!DOCTYPE html>
<link rel="StyleSheet" href="./CSS/style.css">
<meta charset="utf-8" />
<title>
    Login
</title>

<html>
    <body>
        <div class="center">
            <form action="./button_press.php" method="post">
                <label for="fname">Username:</label><br>
                <input type="text" id="uname" name="uname"><br>
                <label for="lname">Password:</label><br>
                <input type="password" id="pass" name="pass"><br><br>
                <input type="submit" value="Sign In">
            </form>
        </div>
        <div class="center">
            <button type="button" onclick="window.location.href='./Sign Up/SignUp.php'">
                Sign Up
            </button>
        </div>
    </body>
</html>