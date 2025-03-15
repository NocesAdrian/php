<?php
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }

  public function __construct() {
    self::welcome(); // calling self or calliing own class name
  }
}

new greeting();
?>

Static methods can also be called from methods in other classes. To do this, the static method should be public:

Example
<?php
class A {
  public static function welcome() {
    echo "Hello World!";
  }
}

class B {
  public function message() {
    A::welcome();
  }
}

$obj = new B();
echo $obj -> message();
?>