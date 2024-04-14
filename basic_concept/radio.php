
<?php
    if(isset($_POST['submit'])){
        $language = $_POST['language'];
        echo "You have selected: ".$language;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio.php" method="post">
        <h3>What language do you need?</h3></br>
        HTML<input type="radio" <?php echo($language="HTML") ?"cheked":""; ?> name="language" value="HTML" id=""/><br>
        PHP<input type="radio"  <?php echo($language="PHP") ?"cheked":""; ?> name="language" value="PHP" id=""/><br>
        CSS<input type="radio"  <?php echo($language="CSS") ?"cheked":""; ?> name="language" value="CSS" id=""/><br>
        <input type="submit" name="submit" value="Send">
</body>
</html>