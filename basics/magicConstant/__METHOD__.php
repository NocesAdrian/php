// If used inside a function that belongs to a class, both class and function name is returned.
<?php


class Fruits {
  public function myValue(){
    return __METHOD__;
  }
}

$kiwi = new Fruits();
echo $kiwi->myValue();


?>