<?php
// Below we declare a class named Fruit consisting of two properties ($name and $color) 
// and two methods set_name() and get_name() for setting and getting the $name property:

class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

// In a class, variables are called properties and functions are called methods!

// Classes are nothing without objects! We can create multiple objects from a class. 
// Each object has all the properties and methods defined in the class, 
// but they will have different property values.

// Objects of a class are created using the new keyword.

// In the example below, $apple and $banana are instances of the class Fruit:

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "\n";
echo $banana->get_name();

?>