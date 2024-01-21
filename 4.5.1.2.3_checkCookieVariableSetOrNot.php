<html>
   
   <head>
      <title>Accessing Cookies with PHP</title>
   </head>
   
   <body>
      
      <?php
         if(isset($_COOKIE["name"]) AND isset($_COOKIE["age"]))
         {   echo "Welcome " . $_COOKIE["name"] ." ".$_COOKIE["age"] ."<br />";
         }
         
         else
            echo "Sorry... Not recognized" . "<br />";
      ?>
      
   </body>
</html>