<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="main.css" type="text/css" />
	<link rel="icon" href="Images/favicon1.ico" type="image/x-icon" />

	<title>Appstore - Books</title>
</head>

<body background="Images/BodyBg.jpg">
	<?php include "header.php"; ?>
	<?php include "navig.php"; ?>
    <?php include "session.php"; ?>    
	<div id="bookscontainer" style="background-color:white;" class="content">
    	<div id="bookswrapper" align="center">
			<h2 style="text-align:center;">eBooks</h2>
	        <?php
			$conn = mysql_connect('localhost', 'root', '');
				if(! $conn )
				{
				  die('Could not connect: ' . mysql_error());
				}
			mysql_select_db('appstore');
			
			$query = "SELECT * FROM books";
			$sql=mysql_query($query);
		
			echo "<table cellpadding=\"6px\" border=\"2px\" id=\"tabprod\" cellspacing=\"0\" width=\"100%\">";
			echo "<tr>";
			$count=0;
			while($row = mysql_fetch_array($sql))
			{
				$img = $row['Image_url'];
				$actualcost=($row['Cost']!=0.00)? "Rs " . $row['Cost']:"Free";
				if ($count==3)
				{
					echo "</tr><tr>";
					$count=0;
				}
				
				echo "<td width='30%' align=\"left\">";
				echo "<ul class='ulprodb'><li style=\"font-size:22px;\"> " . $row['Name'] . "</li>";
				echo "<li ><p><img src=\"" . $img. "\" align=\"center\" /></p></li>";
				echo "<li>Author: " . $row['Author'] . "</li>";
				echo "<li>Publisher: " . $row['Publisher'] . "</li>";				
				echo "<li> Category: " . $row['Category'] . "</li>";
				echo "<li> Number of Pages: " . $row['No_Of_Pages'] . "</li>";
				echo "<li> User Rating: " . $row['Rating'] . "/5 stars</li>";
				echo "<li> Cost: " . $actualcost . "</li>";
				
				$count = $count + 1;				
				echo "<form method=\"get\" action=\"addtocart.php\">";
				echo "<li>  <input type=\"hidden\" name=\"id\" value=\"" . $row['Prod_Id'] . "\"/>
							<input type=\"hidden\" name=\"name\" value=\"" . $row['Name'] . "\"/>
							<input type=\"hidden\" name=\"price\" value=\"" . $row['Cost'] . "\"/>
							<input type=\"hidden\" name=\"type\" value=\"eBook\"/>
							<input id=\"add\" type=\"image\" value=\"Add To Cart\" src=\"Images/addtocart.png\"></li></ul></td>";				
				echo "</form>";
			}
			mysql_close();
			?>
            </tr></table>
     </div>
     </div>
	<?php include "footer.php"; ?>
</body></html>