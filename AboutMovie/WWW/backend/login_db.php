<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>admin</title>


</head>


</head>
<body>

<?php
	session_start();
	mysql_connect("localhost","root","root");
	mysql_select_db("contactdb148");
	$strSQL = "SELECT * FROM account WHERE username = '".mysql_real_escape_string($_POST['username'])."'
	and password = '".mysql_real_escape_string($_POST['password'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{

		 echo "<br><br><br><br>email and password Incorrect!"; ?>
         <h3> <a href="login.php"> login </a><h3> <?php
	}
	else
	{
		$_SESSION["iduser"] = $objResult["iduser"];
		$_SESSION["status"] = $objResult["status"];

		session_write_close();

		if($objResult["status"] == "admin") 
		{
			echo "welcome admin"; ?>
         	<h3> <a href="index.php">go to admin page</a><h3> <?php
				}
				else
				{
					echo "admin only"; ?>
         			<h3> <a href="login.php">login</a><h3> <?php
				}
	}
	mysql_close();

?>

</body>
</html>