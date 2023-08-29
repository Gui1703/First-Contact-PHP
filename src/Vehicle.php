<?php
require_once "AbsVehicle.php";
require_once "IVehicle.php";

class Vehicle extends AbsVehicle implements IVehicle {
    public string $variavel1;
    private string $name;
    private int $rodas;

    public function __construct(string $var1)
    {
        $this->variavel1 = $var1;
    }

    private function func1(): void
    {
        echo 'Func1';
    }

    protected function func2(): void
    {
        $this->func1();
        echo 'Func2';
    }

    public function func3(): void
    {
        echo "Func3";
    }

    public static function func4(){
        echo "Func4";
    }

    public function abs()
    {
        // TODO: Implement abs() method.
        echo "AbsFunction";
    }

    public function abs3(){
        echo "Abs3 ext";
    }

    public function setName(string $_name){
        $this->name=$_name;
    }

    public function getName(){
        return $this->name;
    }

    public function setRodas(string $_rodas){
        $this->rodas=intval($_rodas);
    }

    public function getRodas(){
        return $this->rodas;
    }
}
