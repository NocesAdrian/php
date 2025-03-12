// The preg_match() function will tell you whether a string contains matches of a pattern.
// returnd 0 if none match, 1 if there is match
<?php

$inStr = "Visit W3Schools";
$searchForpattern = "/w3schools/i";
$search = preg_match($searchForpattern, $inStr);
echo $search;

if(!$search) {
    echo "\nnot found";
} else {
    echo "\nfound";
}

$inStr = "Visit 3School";
$searchForpattern = "/w3schools/i";
$search = preg_match($searchForpattern, $inStr);
echo "\n".$search;

if(!$search) {
    echo "\nnot found";
} else {
    echo "\nfound";
}
?>