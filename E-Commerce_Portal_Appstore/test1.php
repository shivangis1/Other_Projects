<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	
<table>
	<form method="get" action="test2.php">
    	<tr>
        	<td>Enter a:</td>
            <td><input type="text" name="a" /></td>
        </tr>
       	<tr>
        	<td>Enter b:</td>
            <td><input type="hidden" name="b" value="abc"/></td>
        </tr>
    	<tr>
        <td></td>
        <?php 
		session_start();
			$_SESSION['h1'] = "hi";
			$_SESSION['h2'] = "ha";
		?>
        <td><input type="submit" value="Submit" /></td>
        </tr>
    </form>
   </table>
</body>
</html>