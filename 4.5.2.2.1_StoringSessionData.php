<?php
// Starting session
session_start();

// Storing session data
$_SESSION["Name"] = "Peter";
//$_POST["Name"]
$_SESSION["Rollnumber"] = "123";
//$_POST["Rollnumber"]
echo "Session Variable name and rollnumber are set";
?>