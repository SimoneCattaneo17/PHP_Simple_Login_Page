<!DOCTYPE html>
<link rel="StyleSheet" href="./CSS/style.css">
<meta charset="utf-8" />

<html>
    <body>
        <?php
            if ($handle = opendir('./alunni')) {
            
                while (false !== ($entry = readdir($handle))) {
            
                    if (!is_dir($entry)){

                        echo "<a href='./alunni/$entry'>$entry</a><br>";
                        
                    }
                }
            }
        ?>
    </body>
</html>