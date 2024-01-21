<!DOCTYPE html>
<html>
<head>
	<title>Simple Form-PHP SELF-4.1.1_SampleForm_PHP_SELP</title>
</head>
<body>
<!-- The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script. So, the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page.
 -->	
<?php 
		echo "Outside of form tag <br>";
		echo $_SERVER['PHP_SELF']."<br>";
?>
 						
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit" name="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name))
  {
    echo "Name is empty<BR>";
  } 
  else
   {
    echo "First Name is ".$name;
  }
}
?>

</body>
</html>