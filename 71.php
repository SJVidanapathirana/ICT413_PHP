<?php 
$num=array(23,6,47,35,2,24);
$arrayTotal=0;
$arrlength=count($num);
for ($x=0;$x<$arrlength;$x++){
	$arrayTotal=$arrayTotal+$num[$x];
}

	echo $arrayTotal;
?>