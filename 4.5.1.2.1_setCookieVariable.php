<?php
   setcookie("name", "John Smith", time() + (86400 * 2), "/","", 0);
   setcookie("age", "36", time()+3600, "/", "",  0);
?>
<html>
   
   <head>
      <title>Setting Cookies with PHP</title>
   </head>
   
   <body>
      <?php 
      	echo "Cookies variables are set ";

      ?>
   </body>
   
</html>