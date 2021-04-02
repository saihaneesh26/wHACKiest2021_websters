<?php
session_start();
if(isset($_POST['add']))
{
	$name=$_POST['name'];
	$vaccine=$_POST['vaccine_used'];
	$price=$_POST['price'];
	$json_file=(file_get_contents('data.json'));
	$json_file=json_decode($json_file,true);
	$len=sizeof($json_file);
	array_push($json_file,["name"=>$name,"vaccine_used"=>$vaccine,"price"=>$price]);
	$final=json_encode($json_file);
	 file_put_contents('data.json', $final);	
	 $_SESSION['success']="done";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>upload the info</title>
</head>
<body>
	<?php
if(isset($_SESSION['success']))
{
	echo($_SESSION['success']);
	unset($_SESSION['success']);
}
?>
<form action="upload_info.php" method="post">
	<h2>Name of hospital:</h2><input type="text" name="name">
	<h2>vaccine name:</h2><input type="text" name="vaccine_used">
	<h2>price of vaccine:</h2><input type="text" name="price">
	<input type="submit" name="add">
</form>

</body>
</html>
