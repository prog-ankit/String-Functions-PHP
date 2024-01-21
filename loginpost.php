<?php
$u=$_POST["user"];
$p=$_POST["pass"];
if(isset($_POST['submit']))
{
	$u = $_POST['user'];
	$p = $_POST['pass'];
	if($u=="Dhara" AND $p==123)
	{
	 echo "welcome user ".$u;
	}
	else
	{
	echo "Wrong Username/Password";
	}
}

?>
