<?php

// Returns the name of the specified class and the name of the namespace, if any.

namespace myArea;

class Fruits {
  public function myValue(){
    return Fruits::class;
  }
}
?>
<!DOCTYPE html>
<html>
<body>

<?php
$kiwi = new Fruits();
echo $kiwi->myValue();
?>