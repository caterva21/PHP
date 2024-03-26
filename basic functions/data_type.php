<?php
/* @brief showing the data type of each variable.
 * @details four types of data are shown: string, integer, boolean and float.
 * @file var_dump-gettype-is_type.php.
 * @date 26/03/2024.
 * @version 1.0 */

$num1 = 'Hola';
$num2 = 10;
$num3 = true;
$num4 = 10.5;

echo (var_dump($num1));
echo "<br>";
echo (var_dump($num2));
echo "<br>";
echo (var_dump($num3));
echo "<br>";
echo (var_dump($num4)); 
echo "<br>";

echo(gettype($num1)); 
echo "<br>";
echo(gettype($num2)); 
echo "<br>";
echo(gettype($num3)); 
echo "<br>";
echo(gettype($num4));
echo"<br>";

echo(is_string($num1));
echo "<br>";
echo(is_int($num2));
echo "<br>";
echo(is_bool($num3));
echo "<br>";
echo(is_float($num4));
?>