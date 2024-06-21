<?php
include "connect.php";
if(isset($_GET['term'])){
    //$term = $_GET['term'];
    $term = mysqli_real_escape_string($link,$_GET['term']);
    $sql = "SELECT *
    FROM telephone
    WHERE name LIKE '%$term%' OR description LIKE '%$term%' ";
    $dbquery = mysqli_query($link,$sql) or die ("cannot query");
    $num_rows = mysqli_num_rows($dbquery) or die ("cannot query num_row");
   echo"<h2>Number of articles <font color ='red'> $num_rows </font></h2>";
   
   echo "<table class='table'> ";   
       echo "<thead class='table-primary'>
                <tr>
                   <th>Id_telephone /th>
                   <th>name</th>
                    <th>num_telephone</th> 
                    <th>adress</th>
                </tr>
            </thead>";
            echo"<tbody>";
            for ($j=0; $j<$num_rows; $j++) {
                $row = mysqli_fetch_assoc($dbquery);
                $id_telephon = $row['id_telephon'];
                $name = $row['name'];
                $num_telephone = $row['num_telephone'];
                $adress = $row['adress'];
                echo "<tr><td>$id_telephon</td><td>$name</td><td>$num_telephone</td><td>$adress</td></tr>";
            }
            echo"</tbody>";
            echo"</table>";
}
else
{
    echo"cannot found";
}
?>