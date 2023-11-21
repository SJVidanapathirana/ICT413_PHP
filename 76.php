<?php 
$emp = array(
	array("ID |","Name |","Salary |"),
	array(1,"Saman",40000),
	array(2,"Nimal",12000),
	array(3,"Kamal",35000),
);
for($row=0;$row<4;$row++){
	for($col=0;$col<3;$col++){
		echo $emp[$row][$col]." ";

	}
	echo "<br>";
}
?>