<?php 
  
session_start(); 
   
if(isset($_SESSION["Name"]))
{ 
    unset($_SESSION["Rollnumber"]);
    echo "Rollnumber variable of session is unset" ;
} 
  
?> 