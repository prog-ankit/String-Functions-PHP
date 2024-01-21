<!DOCTYPE html>
<html>
<head>
	<title>Form3</title>
</head>
<body>

<form method="post" action="4.1.2.4_FormProcessing.php">

Name on card : <input type="text" name="name_on_card"><br>

Credit Card Number<input type="text" name="credit_card_number"><br>

Credit Card Expiration Date :<input type="text" name="credit_card_expiration_date"><br>

<input type="hidden" name="name" 
 value="<?php echo $_POST['name']; ?>">
 
<input type="hidden" name="email_address" 
 value="<?php echo $_POST['email_address'];?>">
 
<input type="hidden" name="membership_type" 
 value="<?php echo $_POST['membership_type']; ?>">
 
<input type="hidden" name="terms_and_conditions" 
  value="<?php echo $_POST['terms_and_conditions']; ?>">

  <input type="submit" name="Finish" value="Finish">
</form>
</body>
</html>