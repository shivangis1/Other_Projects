<!DOCTYPE html>

<head>
	<style type="text/css">
	#navwrapper
	{
		padding-top:10px;
		padding-bottom:10px;
		margin-top:0px;
		margin-bottom:0px;
		background-color: #FFCC00;
		height:20px;
	}
	#products
	{
		list-style-type:none;
		margin:0px;
		overflow:hidden;
		padding:0;
	}
	#products li
	{
		float:left;
		text-decoration:none;
		border-left:dotted 2px;
	}
	#products a
	{
		display:block;
		width:125px;
		color: #000000;
		text-decoration:none;
		font-family: "Arial";
	}
	#products a:hover
	{
		text-decoration:none;
		color: #15317E;
	}	
	#user
	{
		margin-left:10px;
		font-family:Cambria,Times,serif;
		font-weight:bold;
	}
	</style>
</head>
<body>
	<div id="navwrapper">
		<ul id="products">
			<li><a href="games.php">Games</a></li>
			<li><a href="apps.php">Apps</a></li>
			<li><a href="books.php">Books</a></li> 
		</ul>
        <span id="user">
        <?php 
	 	session_start();
		$username = isset ($_SESSION['user'])? $_SESSION['user']: null;
    	if ($username == null)
			{
				echo " Hello guest user!";
			}
			else
			{
				echo "Welcome back ". $username."!"; 
			} 
		?>
        </span>
	</div>
</body>