<?php
session_start();

echo "session_id = ".session_id();

$_SESSION['n1'] = $_POST['n1'];
echo "<br> ค่าที่คุณพิมพ์ลงไป = ".$_SESSION['n1'];
echo" <br> <a href='show_sess.php'>Link next page </a>";
?>