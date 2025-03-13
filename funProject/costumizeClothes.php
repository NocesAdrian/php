<?php 

namespace human;

trait Logger {
    public function info() {
        echo "name: {$this->name}\n";
        echo "clothes: {$this->clothes}\n";
    }

    public function nameIs() {
        echo "name: {$this->name}\n";
    }

    public function wearing() {
        echo "clothes: {$this->clothes}\n";
    }
}

trait set {
    public function setClothes($prefer) {
        $this->clothes = $prefer;
    }
}

trait clothes {
    public function dress() {
        return "dress";
    }

    public function shirt() {
        return "shirt";
    }
}

class people {
    use clothes;
    use Logger;
    use set;

    public $name;
    public $clothes;

    public function __construct($name) {
        $this->name = $name;
    }
}

$person1 = new \human\people('adrian');
$person1->setClothes($person1->dress());
$person1->info();
$person1->name();
$person1->wearing();

?>