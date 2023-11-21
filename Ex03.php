<?php
class Vehicle {
    private $brand;
    private $model;
    private $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function displayDetails() {
        echo "Brand: {$this->brand}.</br>";
        echo "Model: {$this->model}.</br>";
        echo "Year: {$this->year}.</br>";
    }
}

// Example usage:
$vehicle = new Vehicle("Toyota", "Camry", 2023);
$vehicle->displayDetails();
?>