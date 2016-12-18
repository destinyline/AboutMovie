<?php
  $DB_host = "localhost";
  $DB_user = "root";
  $DB_pass = "root";
  $DB_name = "aboutFilm";
if(!mysql_connect("localhost","root","root"))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("aboutFilm"))
{
     die('oops database selection problem ! --> '.mysql_error());
}

?>