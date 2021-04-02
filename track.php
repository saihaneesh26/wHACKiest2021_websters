<?php
ini_set("display_errors",0);
session_start();
$json_file=(file_get_contents('data.json'));
$json_file=json_decode($json_file,true);
$len=sizeof($json_file);
if(isset($_SESSION['lat']))
{
	$lat=$_SESSION['lat'];
}
if(isset($_SESSION['lon']))
{
	$lon=$_SESSION['lon'];
}

if(isset($_SESSION['inc']))
{
	$_SESSION['inc']=$_SESSION['inc'] +1;
	$arval=fmod($_SESSION['inc'],$len);
}

else{
	$_SESSION['inc']=0;
	$arval=0;
}
$var=('<iframe src="https://maps.google.com/maps?q='.$lat.','.$lon.' &output=embed" width="700" height="500" frameborder="0" style="margin:00px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Track nearby</title>
</head>
<body>
	<?php include("header.php"); ?>
	<h1>Vaccination places in banglore</h1>
	<p id="demo"></p>
	<div style="display: inline-block;">
	<div id="map" style="float:left; margin:50px; border: 10px solid black; box-shadow: 2px;">
		<?php  echo($var);?>
	</div>
	<div id="details" style="float:right; margin-top:50px;">
<?php
echo("<p>Hospital name:".$json_file[$arval]['name']."</p>");
echo("<p>vaccine name:".$json_file[$arval]['vaccine_used']."</p>");
echo("<p>vaccine price:".$json_file[$arval]['price']."</p>");
?>

<form action="track.php" method="post">
	<input type="submit" class="btn btn-info" name="next" value="Next place">
</form>
</div>
</div>
</body>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry"></script>

<script>
var lat,lon;
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {

$.ajax({url:"location.php",data:{lat:position.coords.latitude,lon:position.coords.longitude},method:"post",dataType:"text",success:function(data)
			{
				
			}
			});
 lat=position.coords.latitude;
	 lon=position.coords.longitude;

var p1 = new google.maps.LatLng(lat,lon);
var p2 = new google.maps.LatLng(17.4122998,78.2679585);

//alert(calcDistance(p1, p2));

//calculates distance between two points in km's
function calcDistance(p1, p2) {
  return (google.maps.geometry.spherical.computeDistanceBetween(p1, p2) / 1000).toFixed(2);
}
var x = document.getElementById("demo");
x.innerHTML=calcDistance(p1,p2);

}

	getLocation();


</script>
</html>
<!--
('<iframe src="https://maps.google.com/maps?q='.$json_file[$arval]['name'].'&output=embed" width="700" height="500" frameborder="0" style="margin:00px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>');

17.4122998,78.2679585