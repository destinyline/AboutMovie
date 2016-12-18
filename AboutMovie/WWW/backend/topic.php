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
<link rel="stylesheet" type="text/css" href="styles.css">

<title>Backend</title>

</head>

</head>
<body>



	
	<div id="menu"> <div class="logo"> <img src="pic/logoss.png" height="50" width="50" > </div>
		<div class="menubox"> <img src="pic/users.png" height="15" width="15" > <a href="index.php">Users</a>&nbsp; &nbsp; &nbsp; 
		<img src="pic/topics.png" height="18" width="18" > Movie Management&nbsp; &nbsp; &nbsp; 
		<img src="pic/adds.png" height="18" width="18" > <a href="upload_movie.php">Upload</a> 
	&nbsp; &nbsp; &nbsp; 
		&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
		&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp;
		&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
		&nbsp;<div class="green"></div>&nbsp; ADMIN</div>
		
	</div>

	<?php
   	mysql_connect("localhost","root","root");
	mysql_select_db("contactdb148");
	$strSQL = "SELECT * FROM movie";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>

	<div id="content"> 
		Movie 
		<br>
		<br>
<?php 

    while($objResult = mysql_fetch_array($objQuery))
    {

   ?>

		<div class="box"> 
			<div class="pic"> </div>
			<div class="info">
				<div class="username"> <?php echo $objResult["title"];?> </div> 
				<i><div class="email"> <?php echo $objResult["date"];?><i> </div>
				

		</div>

		
			<div class="manage">
				<a href="contents.php">Topic</a>&nbsp;&nbsp;|&nbsp;&nbsp;<img src="pic/dels.png" height="15" width="15" > <a href="delete_topic.php?id= <?php echo $objResult["id"];?>"> delete</a>  &nbsp;&nbsp;&nbsp;&nbsp;
		</div>

			<br>

		</div>

		<br>
			<?php } ?>

	


	</div>



</body>
</html>