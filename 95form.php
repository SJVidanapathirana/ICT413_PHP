<html>
<body>
<?php
$nameErr=$emailErr="";
$name=$email=$other="";
?>

<h2>User Registration</h2>
<form method="post" action="result.php" method="post">

Name:<input type="text" name="name" value="<?php echo $name;?>">
<br><br>
E-mail:<input type="text" name="email" value="<?php echo $email;?>">
<br><br>
Other:<textarea name="other" rows="5" cols="40"><?php echo $other;?></textarea>
<br><br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
