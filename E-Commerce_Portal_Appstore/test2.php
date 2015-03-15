<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		session_start();
		$a2 = $_REQUEST['a'];
		$b2 = $_REQUEST['b'];
		$ho1 = $_SESSION['h1'];
		$ho2 = $_SESSION['h2'];
		
		echo "Value of a is: " . $a2 . " and b is " . $b2 . " " . $ho1 . " " . $ho2;	
	?>
</body>
</html>