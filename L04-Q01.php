<?php
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function displayDetails() {
        echo "Name: $this->name, Age: $this->age";
    }
}

class Employee extends Person {
    public $salary;
    public $position;

    public function __construct($name, $age, $salary, $position) {
        parent::__construct($name, $age);
        $this->salary = $salary;
        $this->position = $position;
    }

    public function displayEmployeeDetails() {
        parent::displayDetails();
        echo ", Salary: $this->salary, Position: $this->position";
    }
}

// Example usage
$employee = new Employee("John Doe", 30, 50000, "Developer");
$employee->displayEmployeeDetails();
?>
