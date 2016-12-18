<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style2.css">

<title>Backend</title>

</head>

</head>
<body>

	
	<div id="menu"> <div class="logo"> <img src="pic/logoss.png" height="50" width="50" > </div>
		<div class="menubox"> <img src="pic/users.png" height="15" width="15" > <a href="index.php">Users</a>&nbsp; &nbsp; &nbsp; 
		<img src="pic/topics.png" height="18" width="18" > <a href="topic.php">Topic Management</a>&nbsp; &nbsp; &nbsp; 
		<img src="pic/adds.png" height="18" width="18" > Create Topic 
	&nbsp; &nbsp; &nbsp; 
		&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
		&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp;
		&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
		&nbsp;<div class="green"></div>&nbsp; ADMIN</div>
		
	</div>

<?php
   	mysql_connect("localhost","root","root");
	mysql_select_db("aboutFilm");
	$strSQL = "SELECT * FROM movie";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>
	

	<div id="content"> 
		Topic name
		<h5><i>date: 20/10/2016 ,09:21am<i/></h5>
		<br>
		<br>
		<div id="poster"></div>
		<br>
		<div id="descript"></div>

		


	</div>

</body>
</html>