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
	include 'header.php';
if(isset($_SESSION['success']))
{
	echo($_SESSION['success']);
	unset($_SESSION['success']);
}
?>



<div class="container-fluid" style="margin: 2rem auto;">
		<div class="row">
			<div class="col-6" style="text-align: center;margin: 1rem auto;border:20px solid skyblue;padding-top:20px;">
				<h4 style="padding-bottom:10px;">Enter the vaccination center info</h4>
				<form class="form"method="POST" action="placeremainder.php">
					<div class="form-group">
                        <label for="name" style="color:coral">Name of hospital:</label>
                        <input type="text" class="form-control" name="name" id="name" style="height:30px margin-block: 1rem;">
                    </div>
					
					<div class="form-group">
                        <label for="vaccine_used"style="color:coral">vaccine name</label>
                        <input type="text" class="form-control" name="vaccine_used" id="email" style="height:30px margin-block: 1rem;">
                    </div>
					
					<div class="form-group">
  						<label for="price" style="color:coral">price of vaccine:</label>
    					<input class="form-control" type="text"  name="price" id="price" style="height:30px margin-block: 1rem;">
					</div>

					<div class="row">
                        <div class="col-6" style="margin: 1rem auto;display: block;text-align: center;">
                            <input class="btn btn-primary" type="submit" name="add">
                        </div>
                    </div>

					
				</form>
			</div>
		</div>
	</div>


</body>
</html>
