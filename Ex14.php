<?php
// Parent Class
abstract class ParentClass {
    //Abstract method with an argument
    abstract protected function prefixName ($name);
}

// Child classes
class ChildClass extends ParentClass {
    public function prefixName ($name) {
        if($name=="Jhon Deo"){
            $prefix="Mr.";
        }elseif ($name=="Jane Doe"){
            $prefix="Mrs.";
        }else{
            $prefix="";
        }
        return "{$prefix} {$name}";
}
}

$class = new ChildClass;
echo $class->prefixName("Jhon Deo");
echo "<br>";

echo $class->prefixName("Jane Doe");

?>
