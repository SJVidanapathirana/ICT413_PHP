<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"mydb");

$name=$_POST['name'];
$email=$_POST['email'];
$other=$_POST['other'];

if ($name !="") {

	$query=mysqli_query($connection,"INSERT INTO 
		student(Name,Email,Other)VALUES('$name','$email','$other')");
	if($query){
		echo "<br/><br/><span>Data Inserted successfully...!!</span>";

	}

}
else{
	echo"<p>Insertion Faild</br>Some Fields are Blank...!!</p>";

}
mysqli_close($connection);
?>
