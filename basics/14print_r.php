<?php

$myVar = 'Hello, World!';  // A Global variable
print_r($GLOBALS); // if print_r($_SESSION); // or what ever that specified variable value will only get printed

?>

// OUTPUT:

/*
[_GET] => Array
        (
        )

    [_POST] => Array
        (
        )

    [_COOKIE] => Array
        (
        )

    [_FILES] => Array
        (
        )

    [argv] => Array
        (
            [0] => 14print_r.php
        )

    [argc] => 1
    [_ENV] => Array
        (
        )

    [_REQUEST] => Array
        (
        )

    [_SERVER] => Array
        (

            and so on.........

*/

