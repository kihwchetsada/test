<?php

session_start();
echo"session_id = ".session_id();
?>
<form action="accept_sess.php" method="POST">
    <?php
      echo "<input type ='text' name='n1' >";
      echo "<input type ='submit' value='ok' >";

?>
</form>