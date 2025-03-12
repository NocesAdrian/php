// The preg_match_all() function will tell you how many matches were found for a pattern in a string.
<?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);

// OUTPUT: 4
// 4 "ain" were found on the $str
?>