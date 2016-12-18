<?php
       require("dbconnect.php");
             $pass = true;

       if(!empty($_POST['topic_name']))
        {
             $topic_name = mysqli_escape_string($link,$_POST['topic_name']);
        }else{
             $pass = false;
        }

        if(!empty($_POST['topic_detail']))
        {
             $topic_detail = mysqli_escape_string($link,$_POST['topic_detail']);
        }else{
             $pass = false;
        }

        

        if($pass)
        {
             $sql = "SELECT topic_name,topic_detail FROM topic WHERE topic_name = '$topic_name' AND topic_detail = '$topic_detail'";
             $query = mysqli_query($link,$sql,MYSQLI_USE_RESULT);

             $row = mysqli_fetch_array($query);

             // echo "Userid: ".$row[0]." DName: ".$row[1];
        }
?>