<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bar Chart</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ["Topping","Slices", { role: "style" } ],
        <?php
          include "connect-db-graph.php";
          $sql = "SELECT *FROM pizza_consumption";
          $dbquery = mysqli_query($link, $sql) or die("Cannot query");
          $num_rows = mysqli_num_rows($dbquery) or die("Cannot query num rows");  
          for ($j = 0; $j < $num_rows; $j++) {
          $row = mysqli_fetch_assoc($dbquery);
          echo "['".$row['topping']."',".$row['slices'].",'blue'],";
          }
          ?>

        ]);

        var options = {
          title: 'Indian Language Use',
          legend: 'none',
          pieSliceText: 'label',
          slices: {  4: {offset: 0.2},
                    12: {offset: 0.3},
                    14: {offset: 0.4},
                    15: {offset: 0.5},
          },
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>
</head>
<body>
<div id="piechart" style="width: 900px; height: 500px;"></div>
</body>
</html>