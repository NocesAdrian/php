<?php

/*

htmlspecialchars() is a PHP function that converts 
special characters in a string into their corresponding 
HTML entities(&lt;(<), &gt;(>), &quot;(")). This helps prevent XSS (Cross-Site Scripting) 
attacks by making sure that characters like <, >, ", ', and & are treated as 
plain text instead of being interpreted as HTML or JavaScript.

*/

$input = '<script>alert("Hacked!")</script>';
$safe_input = htmlspecialchars($input);

echo "\n$safe_input\n\n";
// OUTPUT: 
// &lt;script&gt;alert(&quot;Hacked!&quot;)&lt;/script&gt;


?>