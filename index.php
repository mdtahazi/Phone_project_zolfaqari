<?php

class Device{
    private string $brand;
    private string $model;
    protected int $price;

    function __construct($brand,$model,$price){
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;

    }

    public function getSummary(){
        $this->brand;
        $this->model;
        $this->price;
    }

    public function getInfo(){
        echo "phone brand : " . $this->brand . "phone model : " .  $this->model . "price : " . $this->price;

    }

}

class Phone extends Device{
    public int $simCount;
    public function __construct($simCount){
        $this->simCount = $simCount;
    }


    public function setinfo(){
        echo "sim : " . $this->simCount;

    }
    
}


$apple = new Device('appel' , '16 pro  ' , 990);
$apple->getInfo();
$apple = new Phone(1);
$apple->setinfo();




echo "<br>";
$samsong = new Device('samsong ' , 's25 Ultra' , 1200);
$samsong->getInfo();
$samsong = new Phone(2);
$samsong->setinfo();

