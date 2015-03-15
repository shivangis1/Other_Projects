<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="main.css" type="text/css" />
	<link rel="icon" href="Images/favicon1.ico" type="image/x-icon" />

	<title>Appstore - SOAP Illustration</title>
</head>

<body background="Images/BodyBg.jpg">
	<?php include "header.php"; ?>   
	<?php include "navig.php"; ?>
    <?php include "session.php"; ?>    
	<div id="webserv" style="background-color:white; " class="content" >
		<h2 style="text-align:center;">SOAP Illustration</h2>
		<table width="800" cellpadding="3" align="center" border="0" cellspacing="0">
        <form name="webservform" action="webservicexml.php" method="get">
		  	<tr>
			    <td align="right">Choose your category:</td>
			    <td>
    	        <select name="categ">
					<option>Social</option>
					<option>Communication</option>
					<option>Productivity</option>
				</select>
				</td>
	      	</tr>
	        <tr>
			    <td align="right"><br /><input name="Submit" type="submit" value="See XML version!"></td>            
		    </tr>
      </form>
     </table>
    </div>
    <?php include "footer.php"; ?>
</body>