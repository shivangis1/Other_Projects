<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="main.css" type="text/css" />
	<link rel="icon" href="Images/favicon1.ico" type="image/x-icon" />

	<title>Appstore - Search</title>
    
    <script>
		function showResult(str)
		{
			if (str=="")
			{
				document.getElementById("searchres").innerHTML="";
				return;
			} 
			if (window.XMLHttpRequest)
			{// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			}
			else
			{// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function()
			{
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById("searchres").innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET","searchresult.php?term="+str,true);
			xmlhttp.send();
		}
</script>
</head>

<body background="Images/BodyBg.jpg">
	<?php include "header.php"; ?>
	<?php include "navig.php"; ?>
    <?php include "session.php"; ?>    
	<div id="searchresultcont" style="background-color:white;" class="content">
		<h2 style="text-align:center;">Search this website:</h2>
        <div id="searchbar" align="right" style="background-color:white;" class="content">
			<form method="get">
		    	<input type="text" size="25" maxlength="25" name="searchterm" onKeyUp="showResult(this.value)" />
		        <input type="image" value="Search" id="searchbutton" src="Images/search-icon.png" />
		    </form>
		</div>
        <div id="searchres">
        </div><!--End of searchres-->
    </div><!--End of searchresultcont-->
   	<?php include "footer.php"; ?>
</body>
</html>