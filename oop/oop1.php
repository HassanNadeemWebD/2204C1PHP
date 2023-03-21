<?php

class Car
{

    public $name, $color, $model, $speed, $price;
    function __construct($name, $color, $model, $speed, $price)
    {
        // echo "$name Constructor";
        $this->name = $name;
        $this->color = $color;
        $this->model = $model;
        $this->speed = $speed;
        $this->price = $price;
    }

    // function setData($name, $color, $model, $speed, $price)
    // {
    //     $this->name = $name;
    //     $this->color = $color;
    //     $this->model = $model;
    //     $this->speed = $speed;
    //     $this->price = $price;
    // }
    function displayData()
    {

        echo $this->name;
        echo "<br>";
        echo $this->color;
        echo "<br>";
        echo $this->model;
        echo "<br>";
        echo $this->speed;
        echo "<br>";
        echo $this->price;
        echo "<br>";
    }
    function __destruct()
    {
        echo "$this->name  Destruct Function";
    }
}

// $car1 = new Car();
// echo $car1;

// $car1->name = "Mehran";
// $car1->color = "Black";
// $car1->model = "2022";
// $car1->speed = "120km/h";
// $car1->price = "700,000 PKR";
// echo $car1->name;
// print_r($car1);
// $car1->setData("Mehran", "White", "2021", "120km/hr", "700K");
// $car1->displayData();

// $car2 = new Car();
// $car2->setData("Civic" , "red","2020","220km/hr","5M" );
// $car2->displayData();
// echo $car1->name;
// echo $car1->color;
// echo $car1->model;
// echo $car1->speed;
// echo $car1->price;

$car1 = new Car("Mehran", "White", "2021", "120km/hr", "700K");
$car2 = new Car("Civic", "red", "2020", "220km/hr", "5M");
$car1->displayData();
$car2->displayData();
$car1->displayData();
echo $car1->name;
$car2->displayData();
