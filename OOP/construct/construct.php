<?php
class Fruit {
  public $name;
  public $color;

  // use this faster and shorter and better make sure only use two arguments maximum of 3
  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  // using these two is slow
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit("Apple", "red");
echo $apple->get_name();
echo "\n";
echo $apple->get_color();
?>