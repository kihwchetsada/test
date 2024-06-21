<?php
$host="localhost"; // host or ip address 
$user="root"; // user
$pwd="";  // password
$db_name = "db_news_appwed";
 
$link = mysqli_connect($host,$user,$pwd) or die ("cannot connect server");
mysqli_select_db($link,$db_name) or die ("cannot select db");
mysqli_set_charset($link,"utf8");
?>