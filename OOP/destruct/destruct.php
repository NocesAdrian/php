<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  // get executed at the end of the script
  // destruct cannot have arguments
  function __destruct() {
    echo "\n The fruit is {$this->name} and the color is {$this->color}.";
  }
}

$apple = new Fruit("Apple", "red");
?>

// As constructors and destructors helps reducing the amount of code, they are very useful!