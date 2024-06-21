<?php
session_start();
$username= $_POST['a1'];
$password= $_POST['a2'];

/*echo " username = ".$username;
echo " password = ".$password;
*/
include "connect-db.php";
//echo " user = ".$username;
//echo " <br> password = ".$password;

/*if (($username == "admin") && ($password == "123456")) {
    echo " Login is correct ";
}
else {
    echo "Login is wrong";

}
*/
$sql = "select *
        from login_web
        where username = '$username' AND password = '$password'
        ";
        $dbquery = mysqli_query($link,$sql) or die ("cannot query");
        $NRow = mysqli_num_rows($dbquery);

        if ($NRow <= 0 ){
            echo"<h2> You may type user or password incorrectly </h2>";
            echo"<meta http-equiv = 'refresh' content='1; url=login.php'>";
        }
        else{
            $_SESSION['sess_id'] = session_id();
            $_SESSION['sess_user'] = $username;
            echo"<h2> You type user and password correctly </h2>";
            echo"<meta http-equiv = 'refresh' content='1; url=main.php'>";
        }
?>