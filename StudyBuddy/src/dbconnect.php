<?php  
  
//code for connect.php  
  
$host = "localhost"; // replace this with your host, default is localhost  
  
$user = "root"; // replace with the mysql username  
  
$pass = ""; // replace with the mysql password  
  
$db_name = "studybuddy_database";  
  
  
mysql_connect($host,$user,$pass) or die("  
Cannot connect to host.....".mysql_error());  
  
mysql_select_db($db_name) or die("  
Cannot connect to Database.....".mysql_error());  
  
?>  