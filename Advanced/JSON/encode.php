<?php
// The json_encode() function is used to encode a value to JSON format.
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);
?>

<?php
// This example shows how to encode an indexed array into a JSON array:


$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars);
?>