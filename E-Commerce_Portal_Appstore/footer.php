<?php
	$conn = mysql_connect('localhost', 'root', '');
	if(! $conn )
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db('appstore');
	
	
	$sql = mysql_query("SELECT * FROM viewcounter WHERE id = '1'");
	
	while ($row = mysql_fetch_array($sql))
	{
		$id = $row ['id'];
		$pagename = $row ['pagename'];
		$views = $row ['views'];
		
	}
?>
<!DOCTYPE html>
<head>
	<link href="main.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="footwrapper">
		&nbsp;<hr />
		<b>Copyright 2013</b>
        <br /><br />
        This website has been viewed 
        <?php
		echo $views;
	?>
    times.<br /> &nbsp;
	</div>
</body>