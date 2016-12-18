<?php 
	session_start();
	if($_SESSION['user_id'] == "user_id") {
		echo "Login";
		exit();
	}if($_SESSION['status'] !="admin"){
		echo "admin only";
		exit();
	}

	mysql_connect("localhost","root","root");
	mysql_select_db("contactdb148");
	$strSQL = "SELECT * FROM account WHERE user_id = '".$_SESSION['user_id']."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style1.css">

<title>Backend</title>

</head>

</head>
<body>

	
	<div id="menu"> <div class="logo"> <img src="pic/logoss.png" height="50" width="50" > </div>
		<div class="menubox"> <img src="pic/users.png" height="15" width="15" > <a href="index.php">Users</a>&nbsp; &nbsp; &nbsp; 
		<img src="pic/topics.png" height="18" width="18" > <a href="topic.php">Movie Management</a>&nbsp; &nbsp; &nbsp; 
		<img src="pic/adds.png" height="18" width="18" > Upload 
	&nbsp; &nbsp; &nbsp; 
		&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
		&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp;
		&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
		&nbsp;<div class="green"></div>&nbsp; ADMIN</div>
		
	</div>

	    <form name="form3" method="post" action="save_upload.php" enctype="multipart/form-data">

	<div id="content"> 
		Upload movie 
		<br>
		<br>
		<br>

		

		<div class="box1">

		Name
		<br>
		<input type="text" name="title" id="moviename" placeholder="name" required/>
		<br>
		<br>
		<br>
		<br>
		UPLOAD POSTER IMAGE
		<br>
    <input type="file" name="fileUpload" id="Image">

		<br>
		<br>
		DESCRIPTION
		<br>
		<textarea name="description" placeholder="write about description" type="text" rows="20" cols="20" wrap="physical"></textarea>
		<br>
		<br>
		<br>
		RATE
		<br>
		<select name="rate">
<option value="0"selected="selected">&nbsp;&nbsp;&nbsp;0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<input type="submit" name="btn-add_movie" value="Finish" width="50"/>	
		<br>
		<br>
		<br>
		<br>
		<br>
		</div>

	</div>

</body>
</html>