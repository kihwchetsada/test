<?php
session_start();
echo "session_id = ".session_id();
echo "<br> Page ล่าสุดที่คุณพิมพ์ ".$_SESSION['n1'];
echo "<br> <a href='learn_sess.php'> กลับไปที่หน้ารับข้อมูล </a>";

?>