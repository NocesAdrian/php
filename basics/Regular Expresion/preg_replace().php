// The preg_replace() function will replace all of the matches of the pattern in a string with another string.
// if the pattern match replace it

<?php
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str);
// OUTPUT: Visit W3Schools!
?>