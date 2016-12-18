<?php
//กำหนดตัวแปรเพื่อนำไปใช้งาน
  $DB_host = "localhost";
  $DB_user = "root";
  $DB_pass = "root";
  $DB_name = "aboutFilm";
  $tblname = "topic"; 

mysql_connect($DB_host, $DB_user, $DB_pass) or die("ติดต่อฐานข้อมูลไม่ได้");
// เลือกฐานข้อมูล
mysql_select_db($DB_name) or die("เลือกฐานข้อมูลไม่ได้");
// คำสั่ง SQL และสั่งให้ทำงาน
$sql = "insert into $tblname (title,where_,date_,by,starttime,description) values ('$title','$where_','$date_','$by','$starttime','$description')"); // กำหนดคำสั่ง SQL เพื่อเพิ่มข้อมูลแบบคีย์ในคำสั่ง SQL
$dbquery = mysql_db_query($DB_name, $sql);
// ปิดการติดต่อฐานข้อมูล
mysql_close();
echo "<Font Size=4><B>เพิ่มข้อมูลลงฐานข้อมูลเรียบร้อยแล้ว</B>";
?>