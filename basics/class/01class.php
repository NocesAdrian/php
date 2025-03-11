<?php
/*
Use "public" if you want to allow access from outside the class.
Use "protected" if you want to allow access only from the class itself and subclasses.
Use "private" if you want to restrict access to only within the class.

If you declare a variable in a PHP class without specifying
public, protected, or private, it will cause a syntax error. 
PHP requires you to define the visibility of class properties explicitly.
*/

// A class is like a blueprint for creating multiple objects with the same structure and behavior.

/*

class people {
    public $name = "adrian"; // can be accessed outside class
    protected $birthdate = 11/11/2006; // only be used inside class or subclass
    private $relationship = "single"; // to only be accessed only within the class not either subclasses
}


*/



class People {
    // when declaring class property we use either
    // public private or protected and class will own this property
    public $name; // to access this class property you should use $this->name
    public $age; // to access this class property you should use $this->age
    
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$person1 = new People("John", 25);
$person2 = new People("Jane", 30);
$person3 = new People("Bob", 22);

echo "name: ".$person1->name." age: ".$person1->age."<br>";
echo "name: ".$person2->name." age: ".$person2->age."<br>";
echo "name: ".$person3->name." age: ".$person3->age."<br>";

/*

In this example the new people or person is saved like this in hash table:

// its save as variable object which save one by one 

$person1 = {
    "name" => "John",
    "age" => 25
}

$person2 = {
    "name" => "Jane",
    "age" => 30
}

$person3 = {
    "name" => "Bob",
    "age" => 22
}


*/

?>