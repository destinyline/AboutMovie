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
if($_SESSION['iduser'] == "iduser")
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
mysql_select_db("aboutFilm");
$strSQL ="INSERT INTO topic";
$strSQL .= "(topic_name,poster,description_topic,rate_movie) VALUES ('".$_POST["topic_name"]."','".$_FILES["fileUpload"]["name"]."','".$_POST["description_topic"]."','".$_POST["rate_movie"]."')";
$objQuery = mysql_query($strSQL);

// mysql_close();
echo "<br><br><br><br><h5>update already<h5>";
?> <br> <h3><a href="create.php"><h3> go to create</a> 


</div>

</body>
</html>