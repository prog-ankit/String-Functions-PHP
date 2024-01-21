<?php

//let's create the query
if(isset($_POST["Finish"]))
{
echo $_POST['name'] . "<br>";
echo $_POST['email_address'] . "<br>";
echo $_POST['membership_type'] . "<br>";
echo $_POST['terms_and_conditions'] . "<br>";
echo $_POST['name_on_card'] . "<br>";
echo $_POST['credit_card_number'] . "<br>";
echo $_POST['credit_card_expiration_date'] ."<br>";
}
else
{echo "Click on Finish Button on previous page";}

?>
