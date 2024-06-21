<?php
include"check_session.php";
echo"<h1> Login pass ! </h1>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เมนู</title>
    <style>
table, th, td,tr {
  border: 3px solid black;
}
th{
  background-color: #FFFF33;
}
table{
      background-color:#BEBEBE;
        }
  td {
    background-color:#FFFFFF;
    font-weight: bold;
    text-align: center;
    
  }
    .myfont{
     color:#FFFFFF;
     font: bold;
        }
        .footer{
    background-color:#FFFF33;
    text-align: Left ;
    font: bold;
}
</style>
</head>
<body>
<table style="width:100%">
<tr> <th  colspan="3"><div class="myfont"><h1>Menu Administrator</h1></div></th></tr>
  <tr>
  <td scope="col"><font color="#FF0000">Guestbook</font>
      <p align="center"><a href="">
        <img src="gbook.jpg" width="30%" ></td>
      <td scope="col"><font color="#FF0000">Webboard</font>
      <p align="center"><a href="">
        <img src="Wedbord.jpg" width="30%" ></td>
      <td scope="col"><font color="#FF0000">Gallery</font> 
        <p align="center"><a href="">
        <img src="download.jpg" width="30%" ></td>
  </tr>
  <tr>
  <td scope="row"><font color="#FF0000">Ecommerce</font>
      <p align="center"><a href="">
        <img src="Ecommerce.jpg" width="30%" ></td>
      <td><font color="#FF0000">Poll</font>
      <p align="center"><a href="">
        <img src="Poll.jpg" width="30%" ></td>
      <td><font color="#FF0000">News</font>
      <p align="center"><a href="">
        <img src="News.jpg" width="30%" ></td>
  </tr>
  <tr>
  <td scope="row"><font color="#FF0000">Repost</font>
      <p align="center"><a href="">
        <img src="Repost.jpg" width="30%" ></td>
      <td><font color="#FF0000">Bin</font>
      <p align="center"><a href="">
        <img src="Bin.jpg" width="30%" ></td>
      <td><font color="#FF0000">Exit</font>
      <p align="center"><a href="destroy.php">
        <img src="Exit.jpg" width="30%" ></td>
  </tr>
  <tr> <th  colspan="3"><div class="footer">
    &copy;copyright by Chetsadaphon 
    </div></th></tr>
</table>

</body>
</html>