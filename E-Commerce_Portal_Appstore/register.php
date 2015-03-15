<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="main.css" type="text/css" />
	<link rel="icon" href="Images/favicon1.ico" type="image/x-icon" />

	<title>Appstore - Register</title>
</head>

<body background="Images/BodyBg.jpg">
	<?php include "header.php"; ?>   
	<?php include "navig.php"; ?>	
    <?php include "session.php"; ?>    
	<div id="register" style="background-color:white;" class="content">
	<?php
		$emailField = (isset($_POST['email']) ? $_POST['email'] : null);
		$userField = (isset($_POST['user']) ? $_POST['user'] : null);
		$pwdField =  (isset($_POST['pwd']) ? $_POST['pwd'] : null);
		$mobField = (isset($_POST['mob']) ? $_POST['mob'] : null);
		$emailErr = "";
		$mobErr = "";
		$pwdErr = "";
		$sendData=1;
		
		if (isset($_POST['email']))
		{
			if ($emailField == "")
			{	$emailErr = "Please enter an email-Id";	
				$sendData=0;}
			elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $emailField))
			{	
				$emailErr = "Please enter a valid email-Id";
				$sendData=0;	}
			else
			{	$emailErr = "";	}
		}
		if (isset($_POST['pwd']))
		{
			if ($pwdField == null || $pwdField == "")
			{	
				$pwdErr = (isset($_POST['pwd']) ? "Please enter a password" : "");	
				$sendData=0;	}
			elseif (strlen($pwdField) > 16)
			{	
				$pwdErr = "Password should be less than 16 characters";	
				$sendData=0;	}	
		}
		if (isset($_POST['mob']))
		{
			if ($mobField == null || $mobField == "")
			{
				$mobErr = "Please enter a mobile number";	
				$sendData=0;	}
			if(is_numeric(trim($mobField)) == false ) 
			{	
				$mobErr = "Only numeric values allowed for Mobile Number";	
				$sendData=0;	}
			if(strlen($mobField) < 10)
			{	
				$mobErr = "Mobile number should have 10 digits";	
				$sendData=0;	} 
		}
	?>
		<h2 style="text-align:center;">Create an account now:</h2>
		<table width="400" cellpadding="5" align="center" cellspacing="0" style="border:2px dashed;">
        <form id="registerform" name="registerform" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	  	<tr><br/></tr>
        <tr>
		    <td width="324" align="right">Email-Id:</td>
		    <td width="214"><input name="email" type="text" size="25" maxlength="50" value="<?php print "$emailField"; ?>"></td>
            <td width="244"><?php print "$emailErr"; ?></td>
	      </tr>
         <tr>
         	<td align="right">Username:</td>
		    <td><input name="user" type="text" size="25" maxlength="20" value="<?php print "$userField"; ?>"></td>
            <td>&nbsp;</td>            
         </tr>
		  <tr>
		    <td align="right">Password:</td>
		    <td><input name="pwd" type="password" size="25" maxlength="16"></td>
            <td><?php print "$pwdErr"; ?></td>            
	      </tr>
		  <tr>
		    <td align="right">Mobile Number:</td>
		    <td><input name="mob" type="text" size="25" maxlength="10" value="<?php print "$mobField"; ?>"></td>
            <td><?php print "$mobErr"; ?></td>            
	      </tr>
          <tr>
		    <td></td>
		    <td align="right"><input id="reg" type="image" value="Register" src="Images/register.png"></td>            
	      </tr>
      </form>
</table>
<?php
	if ($sendData == 1)
	{
			$emailrec = (isset($_REQUEST['email']) ? $_REQUEST['email'] : null);
			$userrec = (isset($_REQUEST['user']) ? $_REQUEST['user'] : null);
			$pwdrec = (isset($_REQUEST['pwd']) ? $_REQUEST['pwd'] : null);
			$mobrec = (isset($_REQUEST['mob']) ? $_REQUEST['mob'] : null); 

			$conn = mysql_connect('localhost', 'root', '');
			if(! $conn )
			{
			  die('Could not connect: ' . mysql_error());
			}
			
			mysql_select_db('appstore');
			$sql="INSERT INTO customers (Email_Id, Username, Password, Mobile_No) VALUES('$emailrec','$userrec','$pwdrec','$mobrec')";
			
			if (isset($_REQUEST['email']))
			{
				$result = mysql_query( $sql, $conn ); 
				if ($result)
				{
					echo "<h3>Your account has now been created!</h3>
			        Your username is :" . $userrec;
				}
	            else
	            {	echo "<h3>Registration failed</h3>";	}
			}
	}

?>
</div>
	<?php include "footer.php"; ?>
</body>