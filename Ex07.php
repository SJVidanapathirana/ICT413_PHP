<?php
class university{
    protected static function getName(){
        return "SSL";
    }}
    class faculty extends university{
        public $name;
        public function _construct() {
            $this->name=parent::getName();
        }}
$faculty=new faculty();
echo $faculty-> name;
?>