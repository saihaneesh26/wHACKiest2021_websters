<?php
session_start();
if(isset($_POST['submit'])&&strlen($_POST['name'])>0&&strlen($_POST['email'])>0&&strlen($_POST['date'])>0)
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
	$_SESSION['suc']="added successfully";
}
else{
	$_SESSION['fail']="enter details";
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./style.css">
	<title>place remainder</title>
</head>
<body>
	<?php include("header.php"); ?>
	<div class="container-fluid" style="margin: 2rem auto;">
		<div class="row">
			<div class="col-12" style="text-align: center;margin: 1rem auto;border:20px solid skyblue;padding:2px;">
				<h4 style="padding-bottom:10px;">Wanna Get A Reminder after 28 days for second dose!!
				Fill The Form</h4>
				<form class="form" method="POST" action="placeremainder.php">
					
					<?php
						if(isset($_SESSION['fail']))
						{
							echo("<p style='color:red;'>".$_SESSION['fail']."</p>");
								unset($_SESSION['fail']);
						}
						else if(isset($_SESSION['suc']))
						{
							echo("<p style='color:green;'>".$_SESSION['suc']."</p>");
								unset($_SESSION['suc']);
						}


					 ?>					
					<div class="form-group">
                        <label for="name" style="color:coral;margin-left: 50%;margin-right: 50%;">Name</label>
                        <input type="text" class="form-control" name="name" id="name" style="height:30px margin-block: 1rem;">
                    </div>
					
					<div class="form-group">
                        <label for="email"style="color:coral;margin-left: 50%;margin-right: 50%;">Email</label>
                        <input type="text" class="form-control" name="email" id="email" style="height:30px margin-block: 1rem;">
                    </div>
					
					<div class="form-group">
  						<label for="date" style="color:coral;margin-left: 50%;margin-right: 50%;">Date</label>
    					<input class="form-control" type="date" value="2010-10-07" name="date" id="date" style="height:30px margin-block: 1rem;">
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
<?php include "footer.php"  ?>

</body>
</html>
