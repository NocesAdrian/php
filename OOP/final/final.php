<?php
final class Fruit {
  final public function intro() {
    // some code
  }
}

class Strawberry extends Fruit { // error cannot extend a final class
  // will result in error
  public function intro() { // error cannot override final function

    // some code
  }
}
?>
