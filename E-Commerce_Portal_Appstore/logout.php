<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Appstore - Logout</title>
</head>

<body background="Images/BodyBg.jpg">
	<?php include "header.php"; ?>    
	<?php include "navig.php"; ?>
    <?php include "session.php"; ?>
    <div id="logoutcontainer" style="background-color:white;" class="content"> 
    	<h2 style="text-align:center;">Logout Successful!</h2>
	<?php
		if(!isset($_SESSION)) 
	    {	session_start();    } 
		
		unset($_SESSION['user']);
		unset($_SESSION['password']);	
		session_destroy();
		$conn = mysql_connect('localhost', 'root', '');
		if(! $conn )
		{
		  die('Could not connect: ' . mysql_error());
		}
		mysql_select_db('appstore');
	
		$query = "TRUNCATE TABLE cart";
		$sql = mysql_query($query,$conn); 
	?>
	
	<script language="javascript">
		alert("You have now been logged out.");
		window.location = "/";
	</script>
	</div>
</body>
</html>