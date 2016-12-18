<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>create</title>

</head>

 

 <body>

<?php
session_start();
if($_SESSION['user_id'] == "user_id")
{
echo "Please Login!";
exit();

}


date_default_timezone_set('Asia/Bangkok');
if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"],"myfile/".$_FILES["fileUpload"]["name"]))
	{
		echo " ";
	
	}

mysql_connect("localhost","root","root");
mysql_select_db("contactdb148");
$strSQL ="INSERT INTO movie";
$strSQL .= "(title,date,Image) VALUES ('".$_POST["title"]."','".$_POST["date"]."','".$_FILES["fileUpload"]["name"]."')";
$objQuery = mysql_query($strSQL);

// mysql_close();
echo "";
?> <a href="upload_movie.php"> update already go to Upload</a> 


</div>

</body>
</html>