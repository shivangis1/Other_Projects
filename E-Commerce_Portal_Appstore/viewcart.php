<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="main.css" type="text/css" />
	<link rel="icon" href="Images/favicon1.ico" type="image/x-icon" />

	<title>Appstore - Shopping Cart</title>
    <style type="text/css">
		#cont
		{
			background:url(Images/continue.png) no-repeat center top;
			background-size:150px 50px;
			width:150px;
			height:50px;
			display:block;
		}
		#cont:hover
		{
			background:url(Images/continue%20h.png) no-repeat center top;
			background-size:150px 50px;
		}
		#check
		{
			background:url(Images/checkout.png) no-repeat center top;
			background-size:150px 50px;
			width:150px;
			height:50px;
			display:block;			
		}
		#check:hover
		{
			background:url(Images/checkout%20h.png) no-repeat center top;
			background-size:150px 50px;
		}
	</style>
</head>

<body background="Images/BodyBg.jpg">
	<?php include "header.php"; ?>
	<?php include "navig.php"; ?>
    <?php include "session.php"; ?>    
	<div id="cartwrapper" style="background-color:white;" class="content">
		<h2 style="text-align:center;">Shopping Cart</h2>
  		<?php
			$conn = mysql_connect('localhost', 'root', '');
				if(! $conn )
				{
				  die('Could not connect: ' . mysql_error());
				}
			mysql_select_db('appstore');
			
			$query = "SELECT * FROM cart";
			$sql=mysql_query($query);
			
			if (mysql_num_rows($sql) == 0)
			{
				echo "<script language=\"javascript\">
						alert(\"You haven't added any items to your shopping cart!\");
						window.location = \"\/\";
					  </script>";
			}
			
			echo "<table cellpadding=\"6px\" id=\"tabprod\" cellspacing=\"0\" width=\"80%\" style=\"border:2px dashed;\" align=\"center\">";
			echo "<tr align=\"center\" style=\"border-bottom:2px;\"><th>Serial No.</th><th>Name</th><th>Type</th><th>Cost</th></tr>";
			while($row = mysql_fetch_array($sql))
			{
				echo "<tr align=\"center\">";
				echo "<td>" . $row['Item_No'] . "</td>";
				echo "<td>" . $row['Item_Name'] . "</td>";
				echo "<td>" . $row['Type'] . "</td>";
				echo "<td> Rs " . $row['Price'] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
			
			$sumquery = "SELECT SUM( Price ) AS amount FROM cart";
			$sumsql=mysql_query($sumquery);
			$row = mysql_fetch_array($sumsql);
			
			echo "<br /><br /> ";
			echo "<div style=\"margin-left:auto; margin-right:auto; width:80%;\">";
			echo "Total Amount: Rs " . $row['amount'];
			echo "</div>";
			$amount = $row['amount'];
		?>
        <table align="right" width="30%">
        <tr>
        	<td align="right"><a href="index.php" id="cont"></a></td>
            <td align="left"><a href="payment.php?amount=<?php echo $amount;?>" id="check"></a></td>
        </tr>
        </table>
    </div><!--End of cartwrapper-->
   	<?php include "footer.php"; ?>
</body>
</html>