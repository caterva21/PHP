<?php
/* @brief: isset whit method post 
 * @details:
 * used isset to check if the submit button was pressed
 * isset is a function that checks if a variable is set and is not null
 * @file: isset.php
 * @date 05/04/2024
 * @version 1.0 */

    if(isset($_POST['submit'])){
        $name = (isset($_POST['name']))?$_POST['name']:"";
        $email = (isset($_POST['email']))?$_POST['email']:"";
        echo "Nombre: $name <br> Correo: $email";
    }
?>
<!DOCTYPE html>
<html lang = "es">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action ="index.php" method = "post">
        <input type = "text" name = "name" placeholder = "Nombre">
        <input type = "text" name = "email" placeholder = "Correo">
        <input type = "submit" name = "submit" value = "Enviar">
</body>
</html>