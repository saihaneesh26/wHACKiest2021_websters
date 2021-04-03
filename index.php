<!DOCTYPE html>
<html>
  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
         ['date', 'no of cases'],
          ["09-03",  351481],
          ["09-04",361341],
          ["09-05",370206],
          ["09-06",379486],
          ["09-07",389232],
          ["09-08",398551],
          ["09-09",404324],
          ["09-10",412190],
          ["09-11",421730],
          ["09-12",430947],
          ["09-13",440411],
          ["09-14",449551],
          ["09-15",459445],
          ["09-16",467689]
          
        ]);

        var options = {
          title: 'covid cases',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }

      google.charts.setOnLoadCallback(ndrawChart);

      function ndrawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'deaths'],
          ["09-03",5974],
          ["09-04",6078],
          ["09-05",6078],
          ["09-06",6194],
          ["09-07",6322],
          ["09-08",6417],
          ["09-09",6558],
          ["09-10",6704],
          ["09-11",6832],
          ["09-12",6961],
          ["09-13",7091],
          ["09-14",7185],
          ["09-15",7289],
          ["09-16",7408]

          ]);

        var options = {
          title: 'covid deaths',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('ncurve_chart'));

        chart.draw(data, options);
      }
    </script>
    <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  </head>


  <body style="background-image:url();background-color: black;background-size: cover;background-position:center;background-repeat: no-repeat;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
    <?php include "header.php" ?>   
    <div style="background-color: black;opacity: 70%;background-color: transparent;">
    <div class = "container-fluid">
      <div id="curve_chart" style="width: 700px; height: 500px ;float:left;padding:0;margin-top:100px"></div>
    </div>
    <div class = "container-fluid">
      <div id="ncurve_chart" style="width: 700px; height: 500px; float: right;padding: 0;margin-top:100px"> </div>
    </div>
<div>
</body>
</html>
