<?php
session_start();
/*
$session_id = $_SESSION['sess_id'] ;
$username = $_SESSION['sess_user'] ;


*/
//$_SESSION['sess_id'] = session_id();
//$_SESSION['sess_user'] = $username;

$sess_id = isset($_SESSION['sess_id']) ? $_SESSION['sess_id'] : '' ;
$username = isset($_SESSION['sess_user']) ? $_SESSION['sess_user'] : '' ;

if (($sess_id <> session_id()) OR ($username == "")){
    echo "คุณยังไม่ได้กรอก USERNAME OR PASSWORD";
    echo "<meta http-equiv = 'refresh' content='1; url=login.php'>";
}

?>