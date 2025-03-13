<?php

// The json_decode() function is used to decode a JSON object into a PHP object or an associative array.

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($jsonobj));
?>

<?php
// The json_decode() function returns an object by default. The json_decode() function has a second parameter, 
// and when set to true, JSON objects are decoded into associative arrays.
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($jsonobj, true));
?>