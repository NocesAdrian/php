<?php

/*
namespace is a way to organize code and avoid name conflicts between 
classes, functions, and constants. 
It allows you to group related code together and 
use the same names in different parts of a program without clashes.

imagine making a folder and each folder has content inside can be same 
or diffirent without conflict
*/

namespace youngAdult;

class people {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

namespace adult;

class people {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

// namespace youngAdult;
$youngPerson1 = new \youngAdult\people('zian',17);

echo "youngAdult::name: {$youngPerson1->name} age: {$youngPerson1->age}\n";

// namespace adult;
$adultPerson1 = new \adult\people('adrian',18);

echo "adult::name: {$adultPerson1->name} age: {$adultPerson1->age}";
?>