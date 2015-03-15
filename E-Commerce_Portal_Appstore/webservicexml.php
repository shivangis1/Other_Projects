<?php 
	/* requires the category as the parameter */
	if(isset($_GET['categ'])) 
	{
		$categ = $_GET['categ'];
	
		$link = mysql_connect('localhost','root','') or die('Cannot connect to the DB');
		mysql_select_db('appstore',$link) or die('Cannot select the DB');
	
		$query = "SELECT Name, Developer, Category, Size, Rating, Last_Update, Cost FROM apps WHERE Category = '$categ'";
		$result = mysql_query($query,$link) or die('Errant query:  '.$query);
	
		$appstore = array();
		if(mysql_num_rows($result)) 
		{
			while($app = mysql_fetch_assoc($result)) 
			{	$appstore[] = array('app'=>$app);	}
		}
		header('Content-type: text/xml');
		echo '<appstore>';
		foreach($appstore as $index => $app) 
		{
			if(is_array($app)) 
			{
				foreach($app as $key => $value) 
				{
					echo '<',$key,'>';
					if(is_array($value)) 
					{
						foreach($value as $tag => $val) 
						{
							echo '<',$tag,'>',htmlentities($val),'</',$tag,'>';
						}
					}
					echo '</',$key,'>';
				}
			}
		}
		echo '</appstore>';
		@mysql_close($link);
	}
?>