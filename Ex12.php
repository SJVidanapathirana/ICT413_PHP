<?php
class College{
    const MESSAGE = "SUSL ONLY";
    public function exam(){
        echo self::MESSAGE;
    }
}
$c1=new College();
$c1->exam();
?>