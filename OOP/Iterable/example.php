Example
Return an iterable:

<?php
function getIterable():iterable { // make data type each iterable
  return ["a", "b", "c"];
}

$myIterable = getIterable();
foreach($myIterable as $item) {
  echo $item;
}
?>