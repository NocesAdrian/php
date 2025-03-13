<?php
// $int = 10;
// filter_var($int, FILTER_VALIDATE_INT);
// returns the $int value if its an integer -> 10
// false if not -> false

$int = 100;

// if validate is not equal to false then return its valid
// else return its not int not valid

if (filter_var($int, FILTER_VALIDATE_INT) !== false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}

// In the example above, if $int was set to 0, the function above will return "Integer is not valid". 
// To solve this problem, use the code below:

// this example is better than the first one

$int = 0;

if (filter_var($int, FILTER_VALIDATE_INT) === 0 || filter_var($int, FILTER_VALIDATE_INT) !== false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}

$int = 10;

if (filter_var($int, FILTER_VALIDATE_INT) === 0 || filter_var($int, FILTER_VALIDATE_INT) !== false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}

