<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/test.css">
    <title>Final</title>
</head>
<body>
    <form action="insert1.php" method="post">
    <h1>แบบทดสอบก่อนเรียนวิชาคอมพิวเตอร์เบื้องต้น</h1>
    <label for="name"> ชื่อ  </label>
    <input type="text" name="name" required >
    <label for="class"> ชั้น  </label>
    <input type="text" name="class" required >
    <label for="school"> โรงเรียน  </label>
    <input type="text" name="school" required ><br><br>
    <la>1.ข้อใดจัดเป็นหน่วยแสดงผล ? </a><br>
    <input type="radio" id="sub1" name="sub1"  value="monitor">
    <label for="sub1"> ก.monitor</label><br>
    <input type="radio" id="sub1" name="sub1" value="keyborad"> 
    <label for="sub1"> ข.keyborad</label><br>
    <input type="radio" id="sub1" name="sub1" value="mouse">
    <label for="sub1"> ค.mouse</label><br>
    <br><br>
    <a>2.ข้อใดจัดเป็นหน่วยรับข้อมูล ? </a><br>
    <input type="radio" id="sub2" name="sub2" value="monitor"> 
    <label for="sub2"> ก.monitor</label><br>
    <input type="radio" id="sub2" name="sub2" value="keyborad"> 
    <label for="sub2"> ข.keyborad</label><br>
    <input type="radio" id="sub2" name="sub2" value="mouse">
    <label for="sub2"> ค.mouse</label><br><br>
    <input type="submit" value="Submit Query"><input type="reset" value="Reset">
    </form>
</body>
</html>