<?php
session_start();
if(isset($_POST['submit']))
{
	$json_file=(file_get_contents('users.json'));
	$json_file=json_decode($json_file,true);
	$len=sizeof($json_file);
	$name=$_POST['name'];
	$email=$_POST['email'];
	$date=$_POST['date'];
	$remdate=date('Y-m-d', strtotime($date. ' + 28 days'));
	array_push($json_file,["name"=>$name,"email"=>$email,"date"=>$date,"remdate"=>$remdate]);
	$t=json_encode($json_file);
	file_put_contents("users.json", $t);
	echo($remdate);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>place remainder</title>
</head>
<body>
		<?php include("header.php"); ?>
	<div>
	<form method="POST" action="placeremainder.php">
		<h2>Name:</h2><input type="text" name="name">
		<h2>email:</h2><input type="email" name="email">
		<h2>date of 1st vaccine:</h2><input type="text" name="date" placeholder="yyyy-mm-dd">
		<input type="submit" name="submit">
	</form>
	</div>
</body>
</html>