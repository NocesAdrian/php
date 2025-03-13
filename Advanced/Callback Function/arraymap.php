<?php
// Pass a callback to PHP's array_map() 
// function to calculate the length of every string in an array:

function my_callback($item) {
  return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);
?>

<?php

// Use an anonymous function as a callback for PHP's array_map() function:


$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map( function($item) { return strlen($item); } , $strings);
print_r($lengths);
?>