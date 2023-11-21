<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

class Rectangle {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->setLength($length);
        $this->setWidth($width);
    }

    public function setLength($length) {
        if ($length > 0) {
            $this->length = $length;
        } else {
            throw new InvalidArgumentException("Length must be a positive number.");
        }
    }

    public function setWidth($width) {
        if ($width > 0) {
            $this->width = $width;
        } else {
            throw new InvalidArgumentException("Width must be a positive number.");
        }
    }

    public function getLength() {
        return $this->length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }

    public function calculatePerimeter() {
        return 2 * ($this->length + $this->width);
    }
}

// Example usage:
$rectangle = new Rectangle(5, 3);
echo "Length: " . $rectangle->getLength() . " units.</br>";
echo "Width: " . $rectangle->getWidth() . " units.</br>";
echo "Area: " . $rectangle->calculateArea() . " square units.</br>";
echo "Perimeter: " . $rectangle->calculatePerimeter() . " units.</br>";

    ?>
</body>
</html>