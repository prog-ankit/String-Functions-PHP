<?php
	setcookie("user","", time()-60, "/");
	echo "<hr><br>".$_COOKIE['user'];
?>
