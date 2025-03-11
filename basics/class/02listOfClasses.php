<?php

class Person {
    public $name;
    public $age;

    // used to use the values in shorter code..
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$people = [
    new Person("Adrian", 18),
    new Person("Zian", 17)
];

foreach ($people as $person) {
    echo "Name: {$person->name}, Age: {$person->age}<br>";
}

?>