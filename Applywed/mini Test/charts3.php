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

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Density of Precious Metals, in g/cm^3",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
  </script>
</head>
<body>
    <div id="barchart_values" style="width: 900px; height: 300px;"></div>
</body>
</html>