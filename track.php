<?php
ini_set("display_errors",0);
session_start();
$json_file=(file_get_contents('data.json'));
$json_file=json_decode($json_file,true);
$len=sizeof($json_file);
$arval=0;
if (isset($_SESSION['inc']))
{
	$_SESSION['inc']=fmod(($_SESSION['inc']+1),$len);
}
else{
	$_SESSION['inc']=0;
}
if(isset($_POST['next']))
{
		$arval=$_SESSION['inc'];
		$var=('<iframe src="https://maps.google.com/maps?q='.$json_file[$arval]['name'].'&output=embed" width="700" height="700" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>');
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Track nearby</title>
</head>
<body>
	<h1>Vaccination places in banglore</h1>
	<div id="map">
		<?php
		echo ($var);
		?>
	</div>
	<div id="details" >
<?php
echo("<h2>Hospital name:".$json_file[$arval]['name']."</h2>");
echo("<h2>vaccine name:".$json_file[$arval]['vaccine_used']."</h2>");
echo("<h2>vaccine price:".$json_file[$arval]['price']."</h2>");
?>
</div>
<div id="submit">
<form action="track.php" method="post">
	<input type="submit" name="next" value="Next place">
</form>

</body>
</html>