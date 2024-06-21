<?php
  include "connect-db.php";
  $articletitle = $_POST['articletitle'];
  $articledetails = $_POST['articledetails'];
  //echo"$articletitle $articledetails";
 $sql = "INSERT INTO `news` (`id_news`, `title`, `details`) VALUES (NULL, '$articletitle', '$articledetails'); ";
  $dbquery = mysqli_query($link,$sql) or die ("<br> <h1> query insert </h1>");
 if($dbquery == 1){
    echo"<h1> <a href='list.php'> goto list </a></h1>";
 }
 else
 {
    echo "cannot insert";
 }
 ?>