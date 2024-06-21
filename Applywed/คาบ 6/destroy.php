<?php
session_start();
session_destroy();

echo "<h1> DESTROY SESSION !!!!!</h1>";
echo"<meta http-equiv = 'refresh' content='1; url=login.php'>";
?>