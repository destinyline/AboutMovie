<?php 
	// require("dbconnect.php");
	$con = mysqli_connect("localhost","root","","contactdb148");

	$topic_name = @$_POST["topic_name"];
    $topic_detail = @$_POST["topic_detail"];


	$statement = mysqli_prepare($con,"INSERT INTO topic (topic_name,topic_detail) VALUES(?,?)");
	mysqli_stmt_bind_param($statement, "ss",$topic_name,$topic_detail);
	mysqli_stmt_execute($statement);

	$response = array();
	$response["success"] = true;

	echo json_encode($response);
 ?>