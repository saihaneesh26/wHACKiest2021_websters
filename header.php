
<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid Vaccine Tracker
    </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="formstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" href="favicon.ico" type="image/ico" >
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-light" >
      <div class="container-fluid">  
      <a class="navbar-brand" href="#" style ="font-family: 'Dancing Script', cursive;">Vaccinaid</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav" >
              <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav" >
              <a class="nav-link active" href="track.php">Track Centers</a>
            </li>
            <li class="nav" >
              <a class="nav-link active"  href="upload_info.php">Add Vaccination centers</a>
            </li>
            <li class="nav" >
              <a class="nav-link active" href="vaccine.php">About Vaccine</a>
            </li>
            <li class="nav" >
              <a class="nav-link active"  href="placeremainder.php">Reminder</a>
            </li>
            <li class="nav" >
              <a class="nav-link active"  href="about.php">About Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


      
</body>
<script type="text/javascript">
setInterval(
function (){
$.ajax({url:remainder.php});
},1000000);
</script>
    <script type="text/javascript">
  var temp="",str,last;
  document.addEventListener('mousedown',e=>{
    str+="";
  });
  window.addEventListener('keydown',e=>{
    str=e.code;
    last=str.charAt(str.length-1);
    temp+=last;
    if(temp==="COVID")
    {
      alert("Get Vaccinated Fast!!!");
    }
    if(temp=="WEBStERS")
    {
      alert("Ya, this is WEBSTERS ☻☻♥♣");
    }
    if(temp=="CODERIt")
    {
      alert("CODERIT ki Jai!!!☺");
    }
  });

</script>
</html>

