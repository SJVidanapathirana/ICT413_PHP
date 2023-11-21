<?php 
$age=array("Piyumi"=>35,"Nimal"=>"21","Kamal"=>"40");
asort($age);
foreach ($age as $x => $x_value) 

{
	echo "Name : ".$x." and Age : ".$x_value;
	echo "<br>";
}

?>