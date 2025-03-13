<?php
// This example shows how to access the values from a PHP object:


$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

echo $obj->Peter."\n";
echo $obj->Ben."\n";
echo $obj->Joe."\n";
?>

<?php
// This example shows how to access the values from a PHP associative array:



$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);

echo $arr["Peter"]."\n";
echo $arr["Ben"]."\n";
echo $arr["Joe"]."\n";
?>

<?php
// This example shows how to loop through the values of a PHP object:

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

foreach($obj as $key => $value) {
  echo $key . " => " . $value . "\n";
}
?>

<?php
// This example shows how to loop through the values of a PHP associative array:

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "\n";
}
?>
