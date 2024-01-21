<!DOCTYPE html>
<html>
<head>
	<title>form1</title>
</head>
<body>
	<form action="form1.php" method="post">
		Your First Name<input type="text" name="name" value ="Enter your fist name here">
		First Name: <INPUT TYPE="TEXT" NAME="fname"><BR><br>
			Last Name: <INPUT TYPE="TEXT" NAME="lname"><BR>
		<input type="submit" name="submit1">
	</form>
		<?php
	echo "Hello ".$_POST['name'];
	if(isset($_POST["submit1"])) 
	{
		$fname=$_POST["fname"];//receiving name field value in $name variable  
		$lname=$_POST["lname"];

		echo "Welcome,". $fname ." ".$lname;
	}

	?>
</body>

</html>