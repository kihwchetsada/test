<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Search categories</h1>
    <input type="text" id="searchInput" placeholder="Enter search term">
    <div id="results">
    <?php
       include "../คาบ 10/connect-db2.php"; //เรียกจากโฟลเดอร์ คาบ 10 โดยใช้ .. 

       $sql = "
              select *
              from categories
              ";

        $dbquery = mysqli_query($link,$sql) or die ("cannot query");
        $num_row = mysqli_num_rows($dbquery) or die ("cannot query num_row");
       // echo "num_rows = ".$num_row;
       echo"<h2>Number of articles <font color ='red'> $num_row </font></h2>";
       
       echo "<table class='table'> ";   
           echo "<thead class='table-primary'>
                    <tr>
                       <th>Catagory Id</th>
                       <th>Title</th>
                        <th>Description</th> 
                    </tr>
                </thead>";
                echo"<tbody>";
                for ($j=0; $j<$num_row; $j++) {
                    $row = mysqli_fetch_assoc($dbquery);
                    $category_id = $row['category_id'];
                    $title = $row['title'];
                    $description = $row['description'];
                    echo "<tr><td>$category_id<td>$title</td><td>$description</td></tr>";
                }
                echo"</tbody>";
                echo"</table>";
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="crossorigin="anonymous"></script>
</body>
</html>
<script>
    function performSeach() {
      var seachTerm = $('#searchInput').val();
      $.ajax 
      ({
                  url: 'search.php', //ระบุ url ที่จะไป
                  type: 'GET', // ระบุวิธีการส่ง
                  data: { term: seachTerm }, // เก็บในตัวแปร seachTerm
                  success: function(response)
                   {
                             $('#results').html(response); // set content related to acknowledge server
                     },
        error: function(xhr,status,error) 
        {
            alert ('Error'+status);
        }

               });
                              } 
                              $('#searchInput').on('input',performSeach);
</script>