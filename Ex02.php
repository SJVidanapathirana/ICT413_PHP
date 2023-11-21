<?php
class Circle {
    private $radius;

    public function __construct($radius) {
        $this->setRadius($radius);
    }

    public function setRadius($radius) {
        if ($radius > 0) {
            $this->radius = $radius;
        } else {
            throw new InvalidArgumentException("Radius must be a positive number.");
        }
    }

    public function getRadius() {
        return $this->radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }

    public function calculateCircumference() {
        return 2 * pi() * $this->radius;
    }
}

// Example usage:
$circle = new Circle(4);
echo "Radius: " . $circle->getRadius() . " units.</br>";
echo "Area: " . $circle->calculateArea() . " square units.</br>";
echo "Circumference: " . $circle->calculateCircumference() . " units.</br>";
?>