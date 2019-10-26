<?php
class MyClass
{

    public function __construct()
    {
        echo 'MyClass class has initialized !' . "\n";
    }
}

$userclass = new MyClass();

$userclass2 = new MyClass();

//$userclass->$variable;