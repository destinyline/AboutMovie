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
		<img src="pic/topics.png" height="18" width="18" > <a href="topic.php">Topic Management</a>&nbsp; &nbsp; &nbsp; 
		<img src="pic/adds.png" height="18" width="18" > Create Topic 
	&nbsp; &nbsp; &nbsp; 
		&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
		&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp;
		&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
		&nbsp;<div class="green"></div>&nbsp; ADMIN  </div>
		
	</div>

	<form name="form" method="post" action="login_db.php">

	<div id="content"> 
		LOG IN
		<br>
		<br>
		<br>

		

		<div class="box1">

		USERNAME
		<br>
		<input type="text" name="username" placeholder="username" required/>
		<br>
		<br>
		<br>
		PASSWORD
		<br>
		<input type="text" name="password" placeholder="password" required/>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<input type="submit" name="btn-login" value="enter" width="50"/>	
		<br>
		<br>
		<br>
		<br>
		<br>
		</div>
	</div>



</body>
</html>