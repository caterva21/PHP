<?php
/* @brief strings type
 * @details PHP strings are sequences of characters
 * @file string.php
 * @date 29/03/2024
 * @version 1.0*/

 echo 'Hello World! <br>';
 echo 'this is single quote \' <br>';
 echo 'This is a \\ backslash <br>';
 echo 'This is other backslash \ beetwen words <br>';

$name = "John";
echo "Hello, $name!"; 
$age = 25;
echo "I am $age years old."; 
$total = 10;
$discount = 2;
echo "The total after applying a $discount dollar discount is: $" . ($total - $discount); 

// Heredoc
    $x = <<<END
    <h1>My Website</h1>
    <p>Welcome to my website!</p>
    <p>Feel free to look around and let me know what you think.</p>
    END;
    echo $x;
?>
