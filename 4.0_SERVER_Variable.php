<!DOCTYPE html>
<html>
<body>

<?php
echo "Returns the filename of the currently executing script  ";
echo  $_SERVER['PHP_SELF'];
echo "<br><br>";
echo "Returns the name of the host server".$_SERVER['SERVER_NAME'] ;
echo "<br><br>";
echo "Returns the Host header from the current request".$_SERVER['HTTP_HOST'];
echo "<br><br>";
echo "Returns the complete URL of the current page".$_SERVER['HTTP_REFERER'] ;
echo "<br><br>";
//echo "$_SERVER['HTTP_USER_AGENT'];
//echo "<br><br>";
//echo $_SERVER['SCRIPT_NAME'];
//echo "<br><br>";
?>

</body>
</html>