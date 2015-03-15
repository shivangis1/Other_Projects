<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Appstore - Shopping Cart</title>
</head>
<?php
	$conn = mysql_connect('localhost', 'root', '');
	if(! $conn )
	{
	  die('Could not connect: ' . mysql_error());
	}
	mysql_select_db('appstore');
	session_start();
	
	$id = $_GET["id"];
	$name = $_GET["name"];
	$price = $_GET["price"];
	$type = $_GET["type"];
	
	
	$query = "INSERT INTO cart (Item_Name, Type, Price) VALUES('$name','$type','$price')";
	$sql = mysql_query($query,$conn);	
	mysql_close();	
?>
<body>
	<script language="javascript">
		alert("Selected item has been added to your shopping cart!");
		window.location = "viewcart.php";
	</script>
</body>
</html>