<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>
</head>
<body>
    <h1>Click this button to load data</h1>
    <button onclick="loadData()">LoadData</button>
    <div id="output"> 
    </div>
    <script>
        function loadData(){
          var xhr = new XMLHttpRequest();
          xhr.onreadystatechange = function(){
            if(xhr.readyState === XMLHttpRequest.DONE ){
                if(xhr.status === 200){
                    var response = xhr.responseText;
                    document.getElementById('output').innerHTML = response;
                }else{
                    alert('Error'+xhr.status);
                }
            }
          }
          xhr.open('GET','data2.php',true);
          xhr.send();
        }
    </script>
</body>
</html>