<!DOCTYPE html>
<html>
<head>
	<title>Access Cookie Variable using isset function</title>
</head>
<body>
<?php   
if(isset($_COOKIE["Auction_Item"]))
{ 
    echo "Auction Item is a  " . $_COOKIE["Auction_Item"]; 
}
else
{     echo "No items for auction."; 

}   
echo "No items for auction."; 
?> 

</body>
</html>