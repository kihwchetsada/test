<?php
  include "connect.php";
  $name = $_POST['name'];
  $class = $_POST['class'];
  $school = $_POST['school'];
  $sub1 = $_POST['sub1'];
  $sub2 = $_POST['sub2'];
  //echo"$articletitle $articledetails";
 $sql = "INSERT INTO `final` (`id_from`, `name`, `class`,`school`,`sub1`,`sub2`) VALUES (NULL, '$name', '$class', '$school', '$sub1', '$sub2'); ";
  $dbquery = mysqli_query($link,$sql) or die ("<br> <h1> query insert </h1>");
 if($dbquery == 1){
    echo"<h1> <a href='list1.php'> goto list </a></h1>";
 }
 else
 {
    echo "cannot insert";
 }
 ?>