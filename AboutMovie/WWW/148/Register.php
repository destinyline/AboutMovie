<?php 
	// require("dbconnect.php");
	$con = mysqli_connect("localhost","root","","contactdb148");

	$username = @$_POST["username"];
    $password = @$_POST["password"];
	$email	  = @$_POST["email"];

	$statement = mysqli_prepare($con,"INSERT INTO account (username,password,email) VALUES(?,?,?)");
	mysqli_stmt_bind_param($statement, "sss",$username,$password,$email);
	mysqli_stmt_execute($statement);

	$response = array();
	$response["success"] = true;

	echo json_encode($response);
 ?>