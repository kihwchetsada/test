<?php
  include "connect.php";
  $name = $_POST['name'];
  $num_telephone = $_POST['num_telephone'];
  $address = $_POST['address'];
 $sql = "INSERT INTO `telephone` (`id_telephone`, `name`, `num_telephone`,`address`) VALUES (NULL, '$name', '$num_telephone', '$address',); ";
  $dbquery = mysqli_query($link,$sql) or die ("<br> <h1> query insert </h1>");
 if($dbquery == 1){
    echo"<h1> <a href='list2.php'> goto list </a></h1>";
 }
 else
 {
    echo "cannot insert";
 }
 ?>