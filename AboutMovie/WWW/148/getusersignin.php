<?php

    require_once("dbconnect.php");

    if(!empty($_POST['login_username']))
    {
          $username = mysqli_escape_string($link,$_POST['login_username']); //(ตีวแปรสำหรับ connect ฐานข้อมูล, ตัวแปรข้อมูล);
    }

    if(!empty($_POST['login_password']))
    {
          $password = mysqli_escape_string($link,$_POST['login_password']); //(ตีวแปรสำหรับ connect ฐานข้อมูล, ตัวแปรข้อมูล);
    }

    $sql = "SELECT user_id, username,display_name
            FROM account
            WHERE username = '$username'
            AND password = '$password' "; 

    $result = mysqli_query($link,$sql,MYSQLI_USE_RESULT);

    $row = mysqli_fetch_assoc($result);

    //echo $row['user_id']." : ";
    //echo $row['username'];
   // echo $row['display_name'];

    echo json_encode($row);

?>