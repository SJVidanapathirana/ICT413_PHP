<?php
// Comparable interface
interface Comparable {
    public function compareTo($other): int;
}

// Abstract class Product
abstract class Product implements Comparable {
    protected $name;
    protected $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    // Implementing Comparable interface
    public function compareTo($other): int {
        if ($other instanceof Product) {
            return $this->price - $other->getPrice();
        }
        throw new InvalidArgumentException("Can only compare with objects of type Product");
    }
}

// Example usage
class Book extends Product {
    public function __construct($name, $price) {
        parent::__construct($name, $price);
    }
}

class Laptop extends Product {
    public function __construct($name, $price) {
        parent::__construct($name, $price);
    }
}

$book1 = new Book("The PHP Book", 20);
$book2 = new Book("The JavaScript Book", 15);

$laptop1 = new Laptop("Laptop A", 800);
$laptop2 = new Laptop("Laptop B", 1000);

// Compare products based on price
echo $book1->compareTo($book2); // Output: 5 (Positive means $book1 is more expensive than $book2)
echo "<br>";
echo $laptop1->compareTo($laptop2); // Output: -200 (Negative means $laptop1 is cheaper than $laptop2)
?>
