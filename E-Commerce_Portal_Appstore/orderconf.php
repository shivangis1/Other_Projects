<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Appstore - Order Confirmation</title>
</head>

<body background="Images/BodyBg.jpg">
	<?php include "header.php"; ?>  
	<?php include "navig.php"; ?>	
    <?php include "session.php"; ?>    
	<div id="ocwrapper" style="background-color:white;" class="content">
    	      <?php
			$amountrec = (isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null);
			$emailrec = (isset($_REQUEST['email']) ? $_REQUEST['email'] : null);
			$namerec = (isset($_REQUEST['name']) ? $_REQUEST['name'] : null);
			$mobrec = (isset($_REQUEST['mob']) ? $_REQUEST['mob'] : null); 
			$addrec = (isset($_REQUEST['add']) ? $_REQUEST['add'] : null); 
			$cityrec = (isset($_REQUEST['city']) ? $_REQUEST['city'] : null);
			$moderec = (isset($_REQUEST['mode']) ? $_REQUEST['mode'] : 1);
			$cnorec = (isset($_REQUEST['CardNo']) ? $_REQUEST['CardNo'] : null);			
			$cname = (isset($_REQUEST['CardName']) ? $_REQUEST['CardName'] : null);
			
			$conn = mysql_connect('localhost', 'root', '');
			if(! $conn )
			{
			  die('Could not connect: ' . mysql_error());
			}
			
			mysql_select_db('appstore');
			$sql="INSERT INTO orders (Amount, Email_Id, Name, Mobile_No, Address, City, Payment_Type, Card_No, Card_Name) VALUES('$amountrec','$emailrec','$namerec','$mobrec', '$addrec', '$cityrec','$moderec','$cnorec','$cname')";
			
			if (isset($_REQUEST['email']))
			{
				$result = mysql_query( $sql, $conn ); 
				echo("<h3 align=\"center\">Congratulations! Your purchase has been made!</h3>");
				echo("Hope you had a great shopping experience.");
			}
			$query = "TRUNCATE TABLE cart";
			$sql = mysql_query($query,$conn);
	?>
    </div><!--End of ocwrapper -->
    
    <?php include "footer.php"; ?>
</body>
</html>