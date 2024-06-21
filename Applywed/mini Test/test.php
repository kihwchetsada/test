<?php 
if(isset($_POST['n1'])){
 
$n1 =$_POST['n1'];
 
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test image</title>
</head>
<body bgcolor="#CCCCCC">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <strong>จำนวนรูป</strong><br>  <!--Strong คือตัวหนา เหมือน tag b -->
    <input type="text" name="n1"><br>
    <input type="checkbox" name="m1" value="b1">
    <label>แสดงจากเล็กไปใหญ่</label><br>
    <input type="checkbox" name="m2" value="b2">
    <label>แสดงจากใหญ่ไปเล็ก</label><br>
    <input type="submit" value="show"><br>
    <?php 
    if(isset($_POST['m1'])){ 
    if($_POST['m1'] == 'b1'){ 
    $num1=50;
    if(isset($_POST['n1'])){
    for ($i=1;$i<=$n1;$i++){
       // echo "<br>".$i;
       $c1 = $num1*$i;
       echo"<br> <img src='bin.jpg' width=$c1  height=$c1 > <br>";
}
}
}
}
if(isset($_POST['m2'])){
    if($_POST['m2'] == 'b2'){ 
    $num2=150;
    if(isset($_POST['n1'])){
        for ($i=1;$i<=$n1;$i++){
    $c2 = $num2/$i;
    echo"<br> <img src='bin.jpg' width=$c2  height=$c2 > <br>";
}
}
}
}
    ?>
    </form>
</body>
</html>