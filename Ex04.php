<?php
class Student {
    private $name;
    private $age;
    private $grade;

    public function __construct($name, $age, $grade) {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }

    public function displayInfo() {
        echo "Name: {$this->name}.</br>";
        echo "Age: {$this->age}.</br>";
        echo "Grade: {$this->grade}.</br>";
    }
}

// Example usage:
$student = new Student("John Doe", 26, "A");
$student->displayInfo();

?>