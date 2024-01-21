<!DOCTYPE html>
<?php
$cn= "user";
$cv= "Dhara Wagh";
//setcookie("user","Dhara Wagh",)
setcookie($cn, $cv, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
echo "Name of Cookies is ".$_COOKIE[$cn]."<br>";
if(!isset($_COOKIE[$cn])) {
     echo "Cookie named '" . $cn . "' is not set!";
} 
else {
     echo "Cookie '" . $cn . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cn];
}
//setcookie($cn, $cv, time()-60, "/");
//echo "<hr><br>".$cn;
?>
<!--<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>
-->
</body>
</html>