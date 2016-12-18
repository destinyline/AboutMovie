<?php
       require("dbconnect.php");
             $pass = true;

       if(!empty($_POST['username']))
        {
             $username = mysqli_escape_string($link,$_POST['username']);
        }else{
             $pass = false;
        }

        if(!empty($_POST['password']))
        {
             $password = mysqli_escape_string($link,$_POST['password']);
        }else{
             $pass = false;
        }

        if(strlen($username) <= 0 || strlen($password) <= 0 )
        {
             $pass = false;
        }

        if($pass)
        {
             $sql = "SELECT user_id,display_name FROM account WHERE username = '$username' AND password = '$password'";
             $query = mysqli_query($link,$sql,MYSQLI_USE_RESULT);

             $row = mysqli_fetch_array($query);

             echo "Userid: ".$row[0]." DName: ".$row[1];
        }
?>