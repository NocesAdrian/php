<?php

// The following example uses the filter_var() function to remove all HTML tags from a string:
// FILTER_SANITIZE_STRING

$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;  // OUTPUT: from "<h1>Hello World!</h1> to "Hello World!"

?>