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
	
	<div class="container-fluid" style="margin: 2rem auto;">
		<div class="row">
			<div class="col-6" style="text-align: center;margin: 1rem auto;border:20px solid skyblue;padding:2px;">
				<form class="form" method="POST" action="placeremainder.php">
					<div class="form-group">
                        <label for="name" style="color:coral">Name</label>
                        <input type="text" class="form-control" name="name" id="name" style="height:30px margin-block: 1rem;">
                    </div>
					
					<div class="form-group">
                        <label for="email"style="color:coral">E-Mail</label>
                        <input type="text" class="form-control" name="email" id="email" style="height:30px margin-block: 1rem;">
                    </div>
					
					<div class="form-group">
  						<label for="date" style="color:coral">Date</label>
    					<input class="form-control" type="date" value="2021-10-04" name="date" id="date" style="height:30px margin-block: 1rem;">
					</div>

					<div class="row">
                        <div class="col-6" style="margin: 1rem auto;display: block;text-align: center;">
                            <input class="btn btn-primary" type="submit" name="submit">
                        </div>
                    </div>

					
				</form>
			</div>
		</div>
	</div>

</body>
</html>