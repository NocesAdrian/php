<?php
// Traits allow you to reuse methods in different classes without the need for inheritance.
// A class can use multiple traits, which helps avoid issues related to multiple inheritance.
// Traits cannot be instantiated on their own. They are meant to be used within a class.
// used to better define a class function property and organize function property
// the "use" says the the trait will be a property of certain class
// and we can re use that function on any class
// better organize class
// use when making function that is not __construct()
// trait avoid many conflict things

namespace Human;

trait Logger {
    public function says($msg) {
        echo "{$this->name} says: {$msg}\n";
    }

    public function info() {
        echo "name: {$this->name} age: {$this->age}\n";
    }

    public function name() {
        echo $this->name."\n";
    }

    public function age() {
        echo $this->age."\n";
    }
}

class people {
    use Logger;
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}




namespace animals;

trait animalTrait {
    public function setColor($color) {
        $this->color = $color;
    }

    public function setName($name) {
        $this->name = $name;
    }
}

trait Logger {
    public function says($msg) {
        echo "{$this->name} says: {$msg}\n";
    }

    public function info() {
        echo "dog name: {$this->name} age: {$this->age} color: {$this->color}\n";
    }

    public function animalName() {
        echo $this->animal."\n";
    }

    public function name() {
        echo $this->name."\n";
    }

    public function age() {
        echo $this->age."\n";
    }
}

class animal {
    use animalTrait;
    use Logger;

    public $animal;
    public $name;
    public $sound;
    public $color;

    public function __construct($animal, $name, $age) {
        $this->animal = $animal;
        $this->name = $name;
        $this->age = $age;
    }
}

$dog1 = new \animals\animal('dog', 'sara','4');
$dog1->setColor('white');

$dog1->info();
$dog1->animalName();
$dog1->name();
$dog1->age();

$dog1->says("hello");
$dog1->setName('bayani');
$dog1->name();





$person1 = new \Human\people('adrian', 18);
$person1->info();
$person1->age();
$person1->name();


?>