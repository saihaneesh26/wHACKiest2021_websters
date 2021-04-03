<!DOCTYPE html>
<html>
  <html>
  <head> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
  </head>


  <body style=" font-family: 'Poppins', sans-serif !important; background-image: repeating-linear-gradient(135deg, rgba(86, 86, 86, 0.02) 0px, rgba(86, 86, 86, 0.02) 22px,rgba(202, 202, 202, 0.02) 22px, rgba(202, 202, 202, 0.02) 67px,rgba(247, 247, 247, 0.02) 67px, rgba(247, 247, 247, 0.02) 113px,rgba(135, 135, 135, 0.02) 113px, rgba(135, 135, 135, 0.02) 132px,rgba(157, 157, 157, 0.02) 132px, rgba(157, 157, 157, 0.02) 153px,rgba(53, 53, 53, 0.02) 153px, rgba(53, 53, 53, 0.02) 171px,rgba(17, 17, 17, 0.02) 171px, rgba(17, 17, 17, 0.02) 181px,rgba(179, 179, 179, 0.02) 181px, rgba(179, 179, 179, 0.02) 220px),repeating-linear-gradient(135deg, rgba(58, 58, 58, 0.02) 0px, rgba(58, 58, 58, 0.02) 41px,rgba(198, 198, 198, 0.02) 41px, rgba(198, 198, 198, 0.02) 60px,rgba(176, 176, 176, 0.02) 60px, rgba(176, 176, 176, 0.02) 99px,rgba(173, 173, 173, 0.02) 99px, rgba(173, 173, 173, 0.02) 146px,rgba(164, 164, 164, 0.02) 146px, rgba(164, 164, 164, 0.02) 167px,rgba(179, 179, 179, 0.02) 167px, rgba(179, 179, 179, 0.02) 205px,rgba(228, 228, 228, 0.02) 205px, rgba(228, 228, 228, 0.02) 230px,rgba(23, 23, 23, 0.02) 230px, rgba(23, 23, 23, 0.02) 241px),repeating-linear-gradient(135deg, rgba(190, 190, 190, 0.02) 0px, rgba(190, 190, 190, 0.02) 15px,rgba(74, 74, 74, 0.02) 15px, rgba(74, 74, 74, 0.02) 45px,rgba(98, 98, 98, 0.02) 45px, rgba(98, 98, 98, 0.02) 71px,rgba(43, 43, 43, 0.02) 71px, rgba(43, 43, 43, 0.02) 95px,rgba(131, 131, 131, 0.02) 95px, rgba(131, 131, 131, 0.02) 118px,rgba(21, 21, 21, 0.02) 118px, rgba(21, 21, 21, 0.02) 130px,rgba(77, 77, 77, 0.02) 130px, rgba(77, 77, 77, 0.02) 167px,rgba(231, 231, 231, 0.02) 167px, rgba(231, 231, 231, 0.02) 189px),linear-gradient(90deg, rgb(251, 251, 251),rgb(250, 250, 250));">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
    <?php include"header.php"; ?>
    <div class = "pagebody">
        <div class="textmessage">
            <h1>Lets Get Vaccinated.</h1>
        </div>
        <div class = "image">
            
            <div class="info">
            <h3 style = "font-size: 40px; font-weight: 600;">What is Vaccine</h3>
            <p>
                A vaccine activates our immune system without making us sick. Many dangerous infectious diseases can be prevented in this simple and effective way.
            </p>
        </div>
        <img src="v.jpg" alt="img">
        </div>
        <div class="spacers">

        </div>

        <div class = "image">
            <div class="righty">
            <img class = "right" src="v2.jpeg" alt="img">
        </div>
            <div class="info-r">
            <h3 style = "font-size: 40px; font-weight: 600;">Importance of Vaccination</h3>
            <p>
                When we vaccinate, we activate the immune system's "memory." During vaccination, a weakened microbe, a fragment, or something that resembles it, is added to the body. The immune system is then activated without us becoming sick.</p>
        </div>
        
        </div>

        <div class="spacers">
            
        </div>

        <div class = "image">
            
            <div class="info">
            <h3 style = "font-size: 40px; font-weight: 600;">How are Vaccines given??</h3>
            <p>
                The rotavirus vaccine is given orally (drinkable vaccine). The other vaccines are administered by injection. Mercury is not used as a preservative in any of the vaccines in the Childhood Immunisation Programme.
            </p>
        </div>
        <img  src="v3.jfif" alt="img">
        </div>

        <div class="spacers">
            
        </div>

<div>

</body>
<?php include"footer.php"; ?>
</html>

<!-- style="background-color: black;opacity: 70%;background-color: transparent;"  -->