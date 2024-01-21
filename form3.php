<?php
	if(isset($_GET["submit1"])) 
	{
		$firstname=$_GET["fname"];//receiving name field value in $name variable  
		$lastname=$_GET["lname"];

		echo "Welcome,". $firstname ." ".$lastname;
	}
	
	
?>