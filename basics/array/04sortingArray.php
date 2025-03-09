<?php

/*

sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key

examples:
*/

// The following example sorts the elements of the $cars array in ascending alphabetical order:
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

// The following example sorts the elements of the $numbers array in ascending numerical order:
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

// The following example sorts the elements of the $cars array in descending alphabetical order:
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

// The following example sorts the elements of the $numbers array in descending numerical order:
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

// The following example sorts an associative array in ascending order, according to the value:
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

// The following example sorts an associative array in ascending order, according to the key:
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

// The following example sorts an associative array in descending order, according to the value:
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);

// The following example sorts an associative array in descending order, according to the key:
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);


?>