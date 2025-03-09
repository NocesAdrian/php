<?php

/*
empty() is a PHP function that checks if a variable is empty. It returns true if the variable is:

    "" (empty string)
    0 (integer zero)
    "0" (string zero)
    null
    false
    [] (empty array)
    Undefined variable 
*/

$var = "";
if (empty($var)) {
    echo "The variable is empty";
} else {
    echo "The variable is not empty";
}


?>