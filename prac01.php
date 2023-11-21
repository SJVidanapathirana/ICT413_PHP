<?php
class Person{
    public $name;
    public $age;

    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }

    public function displayDetails(){
        echo "Name : $this->name,Age : $this->age";
    }
}

class Employee extends Person{
    public $salary;
    public $position;
    
    public function __construct($name,$age,$salary,$position){
        parent::__construct($name,$age);
        $this->salary=$salary;
        $this->position=$position;
    }
    public function displayDetails(){
        parent::displayDetails();
        echo "salary ; $this->salary, Position : $this->position";

    }
}
$employee=new Employee("Jaye",25,200000,"3D Modler");
$employee->displayDetails();
?>