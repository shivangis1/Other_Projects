<?php
	$conn = mysql_connect('localhost', 'root', '');
	if(! $conn )
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db('appstore');
	
	mysql_query("UPDATE viewcounter SET `views` = `views` + 1 WHERE id = '1'");
?>
<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="main.css" type="text/css" />
	<link rel="icon" href="Images/favicon1.ico" type="image/x-icon" />

	<title>Welcome to Appstore!</title>
</head>

<body background="Images/BodyBg.jpg">
	<?php include "header.php"; ?>
	<?php include "navig.php"; ?>
    <?php include "session.php"; ?>
	<div id="home" style="background-color:white;">
  		<div id="catalog" align="left">
	  		<div>
	        	<a href="games.php" class="links">
                	<p class="linkname" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif">GAMES</p>
                	<img src="Images/Index/games.png" title="Games" />
                </a>
	        </div>
			<div>
		 		<a href="apps.php"  class="links">
                	<p class="linkname" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif">APPS</p>
                	<img src="Images/Index/apps.png" title="Apps" />
                </a>
	        </div>
	    	<div>
	        	<a href="books.php" class="links">
                	<p class="linkname" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif">eBOOKS</p>
                	<img src="Images/Index/books.jpg" title="Books"/>
                </a>
	        </div>
	    </div><!--End of catalog-->
    </div><!--End of home-->
   	<?php include "footer.php"; ?>
</body>
</html>