<?php

//Create Calculator Class which can request 2 variable at the constructor
//Class must have add,substract,multiply and divide methods
class Calculator{
    private $num1;
    private $num2;
    function __construct($num1,$num2){
        $this->num1 =$num1;
        $this->num2 = $num2;
    }
    function add() : int{
        return $this->num1 + $this->num2;
    }
    function substract() : int{
        return $this->num1 - $this->num2;
    }
    function multiply(){
        return $this->num1 * $this->num2;
    }
    function divide(){
        return $this->num1 / $this->num2;
    }
}

$calculator = new Calculator(3,4);
echo "Adding ".$calculator->add() ."\n";
echo "Substracting ".$calculator->substract() ."\n";
echo "Multiplying ".$calculator->multiply() ."\n";
echo "Dividing ".$calculator->divide() ."\n";