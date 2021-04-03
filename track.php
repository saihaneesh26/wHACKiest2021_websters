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
		$_SESSION['inc']=0;
		$arval=0;
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
	setcookie("lat1",$lat);
	print_r($lat);

	$lon=$json_file[$arval]['lon'];
	setcookie("lon1",$lon);
	print_r($lon);


$var=('<iframe src="https://maps.google.com/maps?q='.$json_file[$arval]['name'].' &output=embed" width="700" height="500" frameborder="0" style="margin:00px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Track nearby</title>
</head>
<body>
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
					echo("<p>Hospital name:".$json_file[$arval]['name']."</p>");
					echo("<p>vaccine name:".$json_file[$arval]['vaccine_used']."</p>");
					echo("<p>vaccine price: Rs.".$json_file[$arval]['price']."</p>");
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
</body>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry"></script>

<script>
var lat,lon,lat1,lon1;
var x=document.getElementById("demo");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
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