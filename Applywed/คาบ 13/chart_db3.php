<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
    function drawChart()
     {
      var data = google.visualization.arrayToDataTable([
        ["Topping", "Slices", { role: "style" } ],
        <?php
          include "connect_chart.php";           
          $sql ="SELECT * FROM pizza";
          $dbquery = mysqli_query($link,$sql) or die("cannot query");
          $num_rows = mysqli_num_rows($dbquery) or die("cannot query num rows");    
          for($j=0;$j<$num_rows; $j++) {
            $row = mysqli_fetch_assoc($dbquery);
            echo "['".$row['topping']."',".$row['slices'].",'red'],"; // บังคับใส่สี
          }
         ?>
      ]);
      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { 
                        calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation"
                         },
                       2]);

      var options = 
      {
        title: "PIZZA",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
        
      };

      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="barchart_values" style="width: 900px; height: 300px;"></div>
<title>BAR CHART </title>
</head>
<body>
    
</body>
</html>