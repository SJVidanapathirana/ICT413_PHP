<?php
class Math {
    public static function add($a, $b) {
        return $a + $b;
    }

    public static function subtract($a, $b) {
        return $a - $b;
    }

    public static function multiply($a, $b) {
        return $a * $b;
    }
}


$number1 = 10;
$number2 = 5;

$sum = Math::add($number1, $number2);
$difference = Math::subtract($number1, $number2);
$product = Math::multiply($number1, $number2);

echo "Sum: $sum\n";
echo "Difference: $difference\n";
echo "Product: $product\n";
?>