<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="main.css" type="text/css" />
	<link rel="icon" href="Images/favicon1.ico" type="image/x-icon" />
    <script type="text/javascript">
		function loginsuccess()
		{
			alert('Welcome to the Appstore!');
			window.location.replace("/")
		}
	</script>

	<title>Appstore - Login</title>
</head>

<body background="Images/BodyBg.jpg">
	<?php include "header.php"; ?>   
	<?php include "navig.php"; ?>	    
<div id="login" style="background-color:white;" class="content">
		<h2 style="text-align:center;">Enter your details:</h2>
		<table width="800" cellpadding="3" align="center" border="0" cellspacing="0">
        <form id="loginform" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		  <tr>
         	<td align="right" width="40%">Username:</td>
		    <td><input name="user" type="text" size="25" maxlength="20"></td>
         </tr>
		  <tr>
		    <td align="right">Password:</td>
		    <td><input name="pwd" type="password" size="25" maxlength="16"></td>
	      </tr>
          	<td></td>
		    <td></td>            
	      </tr>
          </tr>
          	<td></td>
		    <td align="left"><input id="log2" type="image" value=\"Login\" src="Images/login2.png"></td>            
	      </tr>
      </form>
</table>
<?php
		if(isset($_POST) && !empty($_POST))
		{
			if(!isset($_SESSION)) 
		    {	session_start();	}
			
			$userrec = (isset($_REQUEST['user']) ? $_REQUEST['user'] : null);
			$pwdrec = (isset($_REQUEST['pwd']) ? $_REQUEST['pwd'] : null);

			$conn = mysql_connect('localhost', 'root', '');
			if(! $conn )
			{
			  die('Could not connect: ' . mysql_error());
			}
		
			mysql_select_db('appstore');
			$sql="SELECT Username FROM customers WHERE Username= '$userrec' AND Password= '$pwdrec'";
			$result = mysql_query( $sql, $conn ); 			
			$num_rows = mysql_num_rows($result); 
		
			if (isset($_REQUEST['user']))
			{
				if ($num_rows <= 0) 
				{ 
					echo "Sorry, wrong username or password.";
					$userrec = "";
					$pwdrec = "";
				}
				else
				{
					$_SESSION['user']= $_REQUEST['user'];
					$_SESSION['password']= $_REQUEST['pwd'];
					echo "<script type=\"text/javascript\"> loginsuccess();</script>"; 
				}
			}
		}
?>
</div>
	<?php include "footer.php"; ?>
</body>