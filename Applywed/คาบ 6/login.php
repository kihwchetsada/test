<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Chetsadaphon</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">หน้าหลัก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ประวัติ</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ข้อมูลส่วนตัว
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">การศึกษา</a></li>
            <li><a class="dropdown-item" href="#">งานอดิเรก</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">ที่ท่องเที่ยว</a></li>
          </ul>
        </li>
      </div>
  </div>
</nav>
<div class="container mt-5" >
 <img src="logo.jpg" class="mx-auto d-block mb-4"> 
<form action="receive.php" method="post" class="col-lg-6 offset-lg-3">
    <div class="mb-3">
      <label for="username">Username:</label>
      <input type="text" id="username" name="a1" required> <br>
    </div>
    <div class="mb-3">
    <!-- mb-3: Margin-bottom of irem (10 pixels) -->
       <label for="password">Password:</label>
       <input type="password" id="password" name="a2" required> <br>
    </div> 
   <button type="submit">Login</button>
  </form>
</div>
</body>
 
</html>