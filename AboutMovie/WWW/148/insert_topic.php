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
             $top_detail = mysqli_escape_string($link,$_POST['topic_detail']);
        }else{
             $pass = false;
        }

        

        // if(!empty($_POST['display_name']))
        // {
        //      $displayname = mysqli_escape_string($link,$_POST['display_name']);
        // }else{
        //      $pass = false;
        // }

        if(strlen($topic_name) <= 0 || strlen($topic_detail) <= 0 )
        {
             $pass = false;
        }

        if($pass)
        { 
             $sql = "INSERT INTO topic (topic_name,topic_detail) VALUES ('$topic_name','$topic_detail')";         
             $query = mysqli_query($link,$sql) or die("Query Error");      

              include("search_topic.php");
        }

?>