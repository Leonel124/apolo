<?php

class Car
{
    private $engine='combustion';
    protected $tires=4;
    public $flat_tires=0;
    public $gas=100;

    public function __construct($name = null) 
    {
        echo "mi carro se llama ".$name;
    }

    public function runs()
    {
        $this->susbtractGas();
    }

    private function susbtractGas()
    {
        $this->gas-=1;
    }
}

class Truck extends Car
{
    public function __construct()
    {
        echo $this->tires;
       
    }
}

$Car = new Car("comodin");
echo '<br>';
$Car->runs();
$Car->runs();
echo '<br>';
echo $Car->gas;
echo "<hr>";
/////////
/*$Mc = new Car("rayo");
$Mc ->moves();
echo '<br>';
echo $Mc->gas;

echo "<hr>";
/////////
$Mate= new Truck();
echo '<br>';
$Mate->gas=200;
echo '<br>';
echo $Mate->gas;
*/