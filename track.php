<?php
ini_set("display_errors",0);
session_start();
$json_file=(file_get_contents('data.json'));
$json_file=json_decode($json_file,true);
$len=sizeof($json_file);
$arval=0;
if(isset($_POST['next']))
{
	if(isset($_SESSION['inc']))
	{
		$_SESSION['inc']=$_SESSION['inc'] +1;
		$arval=fmod($_SESSION['inc'],$len);
	}

	else{
		$_SESSION['inc']=1;
		$arval=1;
	}
}

else if(isset($_POST['prev']))
{
	if(($_SESSION['inc']!=0))
	{
		$_SESSION['inc']=$_SESSION['inc'] -1;
		$arval=fmod($_SESSION['inc'],$len);
	}
	else{
		$_SESSION['inc']=0;
		$arval=0;
	}

}
//echo($json_file[0]['lat']);
	$lat=($json_file[$arval]['lat']);
	//setcookie("lat1",$lat);
	$lon=$json_file[$arval]['lon'];
	//setcookie("lon1",$lon);
$var=('<iframe src="https://maps.google.com/maps?q='.$json_file[$arval]['name'].' &output=embed" width="700" height="500" frameborder="0" style="margin:00px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Track nearby</title>
	 <link rel="icon" href="favicon.ico" type="image/ico" >
</head>
<body  style="background-image: repeating-linear-gradient(135deg, rgba(86, 86, 86, 0.02) 0px, rgba(86, 86, 86, 0.02) 22px,rgba(202, 202, 202, 0.02) 22px, rgba(202, 202, 202, 0.02) 67px,rgba(247, 247, 247, 0.02) 67px, rgba(247, 247, 247, 0.02) 113px,rgba(135, 135, 135, 0.02) 113px, rgba(135, 135, 135, 0.02) 132px,rgba(157, 157, 157, 0.02) 132px, rgba(157, 157, 157, 0.02) 153px,rgba(53, 53, 53, 0.02) 153px, rgba(53, 53, 53, 0.02) 171px,rgba(17, 17, 17, 0.02) 171px, rgba(17, 17, 17, 0.02) 181px,rgba(179, 179, 179, 0.02) 181px, rgba(179, 179, 179, 0.02) 220px),repeating-linear-gradient(135deg, rgba(58, 58, 58, 0.02) 0px, rgba(58, 58, 58, 0.02) 41px,rgba(198, 198, 198, 0.02) 41px, rgba(198, 198, 198, 0.02) 60px,rgba(176, 176, 176, 0.02) 60px, rgba(176, 176, 176, 0.02) 99px,rgba(173, 173, 173, 0.02) 99px, rgba(173, 173, 173, 0.02) 146px,rgba(164, 164, 164, 0.02) 146px, rgba(164, 164, 164, 0.02) 167px,rgba(179, 179, 179, 0.02) 167px, rgba(179, 179, 179, 0.02) 205px,rgba(228, 228, 228, 0.02) 205px, rgba(228, 228, 228, 0.02) 230px,rgba(23, 23, 23, 0.02) 230px, rgba(23, 23, 23, 0.02) 241px),repeating-linear-gradient(135deg, rgba(190, 190, 190, 0.02) 0px, rgba(190, 190, 190, 0.02) 15px,rgba(74, 74, 74, 0.02) 15px, rgba(74, 74, 74, 0.02) 45px,rgba(98, 98, 98, 0.02) 45px, rgba(98, 98, 98, 0.02) 71px,rgba(43, 43, 43, 0.02) 71px, rgba(43, 43, 43, 0.02) 95px,rgba(131, 131, 131, 0.02) 95px, rgba(131, 131, 131, 0.02) 118px,rgba(21, 21, 21, 0.02) 118px, rgba(21, 21, 21, 0.02) 130px,rgba(77, 77, 77, 0.02) 130px, rgba(77, 77, 77, 0.02) 167px,rgba(231, 231, 231, 0.02) 167px, rgba(231, 231, 231, 0.02) 189px),linear-gradient(90deg, rgb(251, 251, 251),rgb(250, 250, 250))" >
	<?php include("header.php"); ?>
	
	 
	<div class="card" style="">
  		<div class="card-body">
		  <h1 class="display-2">Vaccination Places in Banglore</h1>
  		</div>
	</div>
	<div class="container px-4">
  		<div class="row gx-5">
    		<div class="col" style=" border: 10px solid black">
					<!---<div style="display: inline-block;">
					<div id="map" style="float:left; margin:50px; border: 10px solid black; box-shadow: 2px;">-->
						<?php  echo($var);?>
					<!--</div>--->
    		</div>
    		<div class="col">
				<div id="" style="margin-top:50px;">
					<?php
					echo ("<p style='color:blue'>".$_SESSION['location']."</p>");
					
					echo("<p>Hospital Name:".$json_file[$arval]['name']."</p>");
					echo("<p>Vaccine Name:".$json_file[$arval]['vaccine_used']."</p>");
					echo("<p>Vaccine Price: Rs.".$json_file[$arval]['price']."</p>");
					?>
					<p id="demo"></p>
					<form action="track.php" method="post">
						<input type="submit" id="prev" class="btn btn-info" name="prev" value="previous place">
						<input type="submit" class="btn btn-info" name="next" value="Next place">
					</form>
				</div>
    		</div>
  		</div>
	</div>
	<div>
  <?php include 'footer.php'; ?>
</div>
</body>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry"></script>

<script>
var lat,lon,lat1,lon1;
var x=document.getElementById("demo");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
  	<?php $_SESSION['location']="Your location is being used"; ?> 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
 lat=position.coords.latitude;
	 lon=position.coords.longitude;
lat1=<?php echo$lat; ?>;
lon1=<?php echo$lon; ?>;

console.log(lat,lon,lat1,lon1);
var p1 = new google.maps.LatLng(lat,lon);
var p2 = new google.maps.LatLng(lat1,lon1);

//alert(calcDistance(p1, p2));

//calculates distance between two points in km's
function calcDistance(p1, p2) {
  return(google.maps.geometry.spherical.computeDistanceBetween(p1, p2) / 1000).toFixed(2);
}
x.innerHTML="Distance from here:  "+calcDistance(p1,p2)+" Kms";
console.log(calcDistance(p1,p2));
}

	getLocation();


</script>
</html>
<!--
('<iframe src="https://maps.google.com/maps?q='.$json_file[$arval]['name'].'&output=embed" width="700" height="500" frameborder="0" style="margin:00px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>');

17.4122998,78.2679585
