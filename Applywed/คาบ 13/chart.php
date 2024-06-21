<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Topping', 'Slices'],
          <?php
          include "connect_chart.php";           
          $sql ="SELECT * FROM pizza";
          $dbquery = mysqli_query($link,$sql) or die("cannot query");
          $num_rows = mysqli_num_rows($dbquery) or die("cannot query num rows");    
          for($j=0;$j<$num_rows; $j++) {
            $row = mysqli_fetch_assoc($dbquery);
            echo "['".$row['topping']."',".$row['slices']."],"; 
          }
         ?>
          
        ]);

        var options = {
          title: 'My Chart'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
 
    <title>Test Pie Chart </title>
</head>
<body>
   <div id="piechart" style="width: 900px; height: 500px;"> </div> 
</body>
</html>