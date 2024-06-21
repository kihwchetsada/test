<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test Ajax</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
        }
        
        a {
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>
<?php
        include "connect-db2.php";
        $sql = "select *
         from categories";
         
        $dbquery = mysqli_query($link, $sql) or die ("cannot query");
        $num_row = mysqli_num_rows($dbquery) or die ("cannot query num rows");
        echo "<h1>Number of articles: $num_row</h1>";
    ?>
    <table>
        <thead>
            <tr>
                <th>Category ID</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
</thead>
        <tbody>
            <?php
                for ($j=0; $j<$num_row; $j++) {
                    $row = mysqli_fetch_assoc($dbquery);
                    $category_id = $row['category_id'];
                    $title = $row['title'];
                    $description = $row['description'];
                    echo "<tr><td>$category_id<td>$title</td><td>$description</td></tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>