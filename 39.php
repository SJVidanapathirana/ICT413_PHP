<html>
<body>
<?php 
$marks=99;
if($marks<3){
	echo"fail";
}
else if($marks>=30&&$marks<50){
	echo"C grade";
}
else if($marks>=50&&$marks<80){
	echo"B grade";
}
else if($marks>=80&&$marks<100){
	echo"A grade";
	}
else{
	echo "Invalid input";
	}
?>
</body>
</html>