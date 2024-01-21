<!DOCTYPE html>
<html>
<head>
	<title>Form2.php</title>
</head>
<body>
<form method="post" action="4.1.2.3_HiddenFieldForm3.php">
<input type="radio" name="membership_type" value="Free">Free
<br>
<input type="radio" name="membership_type" value="Normal">Normal
<br>
<input type="radio" name="membership_type" value="Deluxe">Delux
<br>
<input type="checkbox" name="terms_and_conditions">terms_and_conditions<br>

<input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
<input type="hidden" name="email_address" 
 value="<?php echo $_POST['email_address']; ?>" >
 
<input type="submit" value="Go To Step 3"><br>
</form>
</body>
</html>