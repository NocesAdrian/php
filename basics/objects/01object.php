<?php
/*
Use "public" if you want to allow access from outside the class.
Use "protected" if you want to allow access only from the class itself and subclasses.
Use "private" if you want to restrict access to only within the class.

If you declare a variable in a PHP class without specifying
public, protected, or private, it will cause a syntax error. 
PHP requires you to define the visibility of class properties explicitly.
*/

class people {
    public $name = "adrian";
    protected $birthdate = 11/11/2006;
    private $relationship = "single";
}

?>