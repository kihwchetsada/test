<?php
$host="localhost"; // host or ip address 
$user="root"; // user
$pwd="";  // password
$db_name = "test_login";

$link = mysqli_connect($host,$user,$pwd) or die("cannot connect MySQL Server"); //connect database
mysqli_select_db($link,$db_name) or die ("cannot select Database"); //select database
mysqli_set_charset($link, "utf8"); // show thai languange 
?>