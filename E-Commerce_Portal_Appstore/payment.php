<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="main.css" type="text/css" />
	<link rel="icon" href="Images/favicon1.ico" type="image/x-icon" />

	<title>Appstore - Payment</title>
    <script type="text/javascript">
		function validateForm()
		{
			var email=document.forms["payform"]["email"].value;
			if (email==null || email=="")
			{
				alert("Please enter your email address");
				return false;
			}
			var atpos=email.indexOf("@");
			var dotpos=email.lastIndexOf(".");
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
			{
				alert("Please enter a VALID email address");
				return false;
			}
			
			var name=document.forms["payform"]["name"].value;
			if (name==null || name=="")
			{
				alert("Please enter your name");
				return false;
			}
			
			var mob=document.forms["payform"]["mob"].value;
			if (mob==null || mob=="")
			{
				alert("Please enter your mobile number");
				return false;
			}
			
			var city=document.forms["payform"]["city"].value;
			if (city==null || city=="")
			{
				alert("Please enter city name");
				return false;
			}
		}
	</script>
</head>

<body background="Images/BodyBg.jpg">
	<?php include "header.php"; ?>
	<?php include "navig.php"; ?>
    <?php include "session.php"; ?>
	<div id="paywrapper" style="background-color:white;">
    	<h2 style="text-align:center;">Enter your details to make payment:</h2>
  		<table width="600" cellpadding="5" align="center" cellspacing="0" style="border:2px dashed;">
        <form name="payform" action="orderconf.php" method="post" onsubmit="return validateForm()">
	  	<tr><br/>
        	<td align="right">You have to pay:</td>
        	<td><?php  echo $_GET['amount']?><input type="hidden" id="amount" value="<?php echo $_GET['amount']; ?>" >
        </tr>
        <tr>
		    <td width=45% align="right">Email-Id*:</td>
		    <td width=><input name="email" type="text" size="25" maxlength="50"></td>
	      </tr>
         <tr>
         	<td align="right">Name*:</td>
		    <td><input name="name" type="text" size="25" maxlength="40"></td>
         </tr>
          <tr>
		  <tr>
		    <td align="right">Mobile Number*:</td>
		    <td><input name="mob" type="text" size="25" maxlength="10"></td>        
	      </tr>
          <tr>
		    <td align="right">Address:</td>
		    <td><textarea rows = "2" cols="19" name="add" ></textarea></td>        
	      </tr>
          <tr>
		    <td align="right">City*:</td>
		    <td><input name="city" type="text" size="25" maxlength="10"></td>        
	      </tr>
          <tr>
		    <td align="right">Mode of Payment:</td>
		    <td><input type="radio" name="mode" id="mode" value="1" checked="checked"/ onClick="document.getElementById('CardNo').disabled = true;document.getElementById('CardName').disabled = true;">Cash-On-Delivery 
            	<input type="radio" name="mode" id="mode" value="2" onClick="document.getElementById('CardNo').disabled = false;document.getElementById('CardName').disabled = false;" />Credit/Debit Card</td>     
	      </tr>
          <tr>
          	<td align="right">Enter card number: </td>
			<td><input type="text" size="25" maxlength="16" name="CardNo" id="CardNo" disabled>
          <tr>
          	<td align="right">Enter card holder's name: </td>
			<td><input type="text" size="25" maxlength="50" name="CardName" id="CardName" disabled></td>
		  </tr>	
          <tr>
		    <td align="right"><a href="viewcart.php" id="back"></a></td>
		    <td align="left"><input id="done" type="image" value="Done" src="Images/done.png"></td>            
	      </tr>
      </form>
      </table>   
      <table align="right" width="20%">
        <tr>
        	<td align="right"></td>
        </tr>
        </table>   
    </div><!--End of paywrapper-->
   	<?php include "footer.php"; ?>
</body>
</html>