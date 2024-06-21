<?php
include "../คาบ 10/connect-db2.php";
if(isset($_GET['term'])){
    //$term = $_GET['term'];
    $term = mysqli_real_escape_string($link,$_GET['term']);
    $sql = "SELECT *
    FROM categories
    WHERE title LIKE '%$term%' OR description LIKE '%$term%' ";
    $dbquery = mysqli_query($link,$sql) or die ("cannot query");
    $num_rows = mysqli_num_rows($dbquery) or die ("cannot query num_row");
   // echo "num_rows = ".$num_row;
   echo"<h2>Number of articles <font color ='red'> $num_rows </font></h2>";
   
   echo "<table class='table'> ";   
       echo "<thead class='table-primary'>
                <tr>
                   <th>Catagory Id/th>
                   <th>Title</th>
                    <th>Description</th> 
                </tr>
            </thead>";
            echo"<tbody>";
            for ($j=0; $j<$num_rows; $j++) {
                $row = mysqli_fetch_assoc($dbquery);
                $category_id = $row['category_id'];
                $title = $row['title'];
                $description = $row['description'];
                echo "<tr><td>$category_id<td>$title</td><td>$description</td></tr>";
            }
            echo"</tbody>";
            echo"</table>";
}
else
{
    echo"cannot found";
}
?>