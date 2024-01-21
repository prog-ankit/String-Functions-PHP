<!DOCTYPE html>
<html>
<head>
	<title>form1-4.1.1_SampleForm_POST</title>
</head>
<body>
	<form action="4.1.1_SampleForm_POST.php" method="post">
			First Name: <input type="text" name="fname"><BR><br>
			Last Name:  <input type="text" name="lname"><BR>
						<input type="submit" name="submit1">
	</form>
	<?php
	//echo "Hello ".$_POST["fname"]."  ".$_POST["lname"]."<br>";
	
	if(isset($_POST["submit1"])) //1
	{

		//echo "Hello ".$_POST["fname"]."  ".$_POST["lname"]."<br>";
		$firstname=$_POST["fname"];//receiving name field value in $name variable  
		$lastname=$_POST["lname"];
		echo "Welcome user ". $firstname ." ".$lastname;
	}
	
?>
	</body>
</html>