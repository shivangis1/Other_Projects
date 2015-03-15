<?php
		$term = $_REQUEST['term'];
		$conn = mysql_connect('localhost', 'root', '');
			if(! $conn )
			{
			  die('Could not connect: ' . mysql_error());
			}
		mysql_select_db('appstore');
		
		$noresult = 1;			

		if (strlen($term) >= 3)
		{
			$term = htmlspecialchars ($term);
			$term = mysql_real_escape_string($term);

			$query1 = "SELECT * FROM apps WHERE (`Name` LIKE '%".$term."%') OR (`Developer` LIKE '%".$term."%')";
			$sql1 = mysql_query($query1);
			echo "<h3>Apps: </h3>";
			if (mysql_num_rows($sql1) == 0)
			{
				echo "No results to display.";
			}
			else
			{
			echo "<table cellpadding=\"6px\" border=\"2px\" id=\"tabprod\" cellspacing=\"0\" width=\"100%\">";
			echo "<tr>";
			$count=0;
			while($row = mysql_fetch_array($sql1))
			{
				$img = $row['Image_url'];
				$actualcost=($row['Cost']!=0.00)? "Rs " . $row['Cost']:"Free";
				if ($count==3)
				{
					echo "</tr><tr>";
					$count=0;
				}
				echo "<td width='30%' align=\"left\">";
				echo "<ul class='ulprod'><li style=\"font-size:22px;\"> " . $row['Name'] . "</li>";
				echo "<li ><p><img src=\"" . $img. "\" align=\"center\" /></li></p>";
				echo "<br /><li>Developer: " . $row['Developer'] . "</li>";
				echo "<li> Category: " . $row['Category'] . "</li>";
				echo "<li> Size: " . $row['Size'] . "</li>";
				echo "<li> User Rating: " . $row['Rating'] . "/5 stars</li>";
				echo "<li> Last Updated On: " . $row['Last_Update'] . "</li>";
				echo "<li> Cost: " . $actualcost . "</li></ul></td>";
				$count = $count + 1;				
			}
			echo "</tr><table>";
			}
			
			$query2 = "SELECT * FROM games WHERE (`Name` LIKE '%".$term."%') OR (`Developer` LIKE '%".$term."%')";
			$sql2 = mysql_query($query2);
			echo "<h3>Games: </h3>";
			if (mysql_num_rows($sql2) == 0)
			{
				echo "No results to display.";
			}
			else
			{
			echo "<table cellpadding=\"6px\" border=\"2px\" id=\"tabprod\" cellspacing=\"0\" width=\"100%\">";
			echo "<tr>";
			$count=0;
			while($row = mysql_fetch_array($sql2))
			{
				$img = $row['Image_url'];
				$actualcost=($row['Cost']!=0.00)? "Rs " . $row['Cost']:"Free";
				if ($count==3)
				{
					echo "</tr><tr>";
					$count=0;
				}
				echo "<td width='30%' align=\"left\">";
				echo "<ul class='ulprod'><li style=\"font-size:22px;\"> " . $row['Name'] . "</li>";
				echo "<li ><p><img src=\"" . $img. "\" align=\"center\" /></li></p>";
				echo "<br /><li>Developer: " . $row['Developer'] . "</li>";
				echo "<li> Category: " . $row['Category'] . "</li>";
				echo "<li> Size: " . $row['Size'] . "</li>";
				echo "<li> User Rating: " . $row['Rating'] . "/5 stars</li>";
				echo "<li> Last Updated On: " . $row['Last_Update'] . "</li>";
				echo "<li> Cost: " . $actualcost . "</li></ul></td>";
				$count = $count + 1;				
			}
			echo "</tr><table>";
			}
			
			$query3 = "SELECT * FROM books WHERE (`Name` LIKE '%".$term."%') OR (`Author` LIKE '%".$term."%') OR (`Publisher` LIKE '%".$term."%')";								
			$sql3 = mysql_query($query3);
			echo "<h3>eBooks: </h3>";
			if (mysql_num_rows($sql3) == 0)
			{
				echo "No results to display.";
			}
			else
			{
			echo "<table cellpadding=\"6px\" border=\"2px\" id=\"tabprod\" cellspacing=\"0\" width=\"100%\">";
			echo "<tr>";
			
			$count=0;
			while($row = mysql_fetch_array($sql3))
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
				echo "<li ><p><img src=\"" . $img. "\" align=\"center\" /></li></p>";
				echo "<li>Author: " . $row['Author'] . "</li>";
				echo "<li>Publisher: " . $row['Publisher'] . "</li>";				
				echo "<li> Category: " . $row['Category'] . "</li>";
				echo "<li> Number of Pages: " . $row['No_Of_Pages'] . "</li>";
				echo "<li> User Rating: " . $row['Rating'] . "/5 stars</li>";
				echo "<li> Cost: " . $actualcost . "</li></ul></td>";
				$count = $count + 1;				
			}
			echo "</tr><table>";	
			}
	}
	else
	{
		echo "Search term should have at least 3 characters";
	}	
?>