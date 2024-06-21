<?php 
$host ="localhost";
$user ="root";
$pwd = "";
$dbname = "dbfinal";
$link = mysqli_connect($host, $user, $pwd, $dbname) or die("cannot connect MySQL Server");
mysqli_select_db($link,$dbname) or die ("cannot select Database");
mysqli_set_charset($link, "utf8");
?>