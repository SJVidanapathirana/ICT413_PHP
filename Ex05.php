<?php
class greeting{
    public static function welcome(){
        echo "Hello World!";
    }
    public function_construct(){
        self::welcome();
    }
}
new greeting();
?>