<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    class fruit{
        public $name;
        public $color;
        public function __construct($name, $color){
            $this-> name = $name;
            $this-> color = $color;
        }

        public function intro(){
            echo "this fruit {$this->name} and the color is {$this->color}.";
        }
    }

    class Strawberry extends fruit{
        public function message(){
            echo "Am I a fruit or berry";
        }
    }

    $Strawberry = new Strawberry("strawberry", "red");
    $Strawberry-> message();
    $Strawberry-> intro();


    ?>
</body>
</html>