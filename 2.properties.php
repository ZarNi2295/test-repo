<?php

class Person
{

    private $name = 'testing';

    private $title;

    public function __construct($name = "Jane Doe",$title = "MR")
    {
        $this->name = $name;
        $this->title = $title;
    }

    public function display()
    {
        
        echo self::hello() . $this->sayHello() . ' '. $this->name;
    }

    public static function hello(){
        return 'Hello ';
    }
    public function sayHello(){
        echo "\nHello from non-static method";
    }
}


$james = new Person("James","Mr");

$jd = new Person();

$james->display();

$jd->display();