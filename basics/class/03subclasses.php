// subclass allow as to re use class properties like variables and functions as long as 
// it is not private

<?php

class animal {
    public $name;
    public $sound;

    public function __construct($name, $sound) {
        $this->name = $name;
        $this->sound = $sound;
    }
}

$dog = new animal('browny', 'bark');
echo "name: ".$dog->name." sound: ".$dog->sound."\n";

// this is subclass
// reuses the animal properties without typing them again in this subclass
// for better organize and simpleness
class cat extends animal {
    public $color;

    public function color($color) {
        $this->color = $color;
    }
}

$cat1 = new cat("usang", "meowww");
$cat1->color('white'); // use a function that is not __construct()

echo "name: {$cat1->name} sound: {$cat1->sound} color: {$cat1->color}"

?>