<?php

class Person
{

    private $name;

    
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

}

$james = new Person();
$james->setName("Jame");
echo $james->getName();