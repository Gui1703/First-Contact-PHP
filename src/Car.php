<?php
require_once "Vehicle.php";
require_once "CarTrait.php";

class Car extends Vehicle {
    use CarTrait;

    public function __construct(string $var1)
    {
        parent::__construct($var1);
    }

    public function car1(){
        $this->func2();
        echo $this->variavel1;
    }
}
