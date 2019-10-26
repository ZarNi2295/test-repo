<?php

//Create a class to get name of the person and say hello on constructor
//class must have a function to reverse the name
//create a method which request age and set into the class properties

class Person{
    private $name;
    private $age;
    function __construct($name){
        $this->name = $name;
        echo "Hello ". $this->name. "\n";
    }

    function reverseName() : string{
        return strrev($this->name);
    }

    function setAge($age =0) {
        $this-> age = $age;
        echo "\nThe age is now set to " . $this->age. "\n";
    }
}

$aungaung = new Person("Aung Aung");
echo $aungaung->reverseName();
$aungaung->setAge(16);
//var_dump($aungaung); 