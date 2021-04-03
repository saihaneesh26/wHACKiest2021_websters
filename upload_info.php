<?php
session_start();
if(isset($_POST['add']))
{
	$name=htmlentities($_POST['name']);
	$vaccine=htmlentities($_POST['vaccine_used']);
	$price=htmlentities($_POST['price']);
	$lat=htmlentities($_POST['lat']);
	$lon=htmlentities($_POST['lon']);
	$json_file=(file_get_contents('data.json'));
	$json_file=json_decode($json_file,true);
	$len=sizeof($json_file);
	array_push($json_file,["name"=>$name,"vaccine_used"=>$vaccine,"price"=>$price,"lat"=>$lat,"lon"=>$lon]);
	$final=json_encode($json_file);
	 file_put_contents('data.json', $final);	
	 $_SESSION['suc']="done";
}
else{
	$_SESSION['fail']="Enter Details";
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./style.css">
	<title>upload the info</title>
	<link rel="icon" href="favicon.ico" type="image/ico" >
</head>
<body>

	<?php
	include 'header.php';
?>



<div class="container-fluid" style="margin: 2rem auto;">
		<div class="row">
			<div class="col-12" style="text-align: center;margin: 1rem auto;border:20px solid skyblue;padding-top:20px;">
		
			<h4>Enter the vaccination center info</h4>
			
			<form class="form"method="POST" action="upload_info.php">
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
                        <label for="name" style="color:coral">Name Of Hospital:</label>
                        <input type="text" class="form-control" name="name" id="name" style="height:30px margin-block: 1rem;">
                    </div>
					
					<div class="form-group">
                        <label for="vaccine_used"style="color:coral">Vaccine Name:</label>
                        <input type="text" class="form-control" name="vaccine_used" id="email" style="height:30px margin-block: 1rem;">
                    </div>
					
					<div class="form-group">
  						<label for="price" style="color:coral">Price Of Vaccine:</label>
    					<input class="form-control" type="text"  name="price" id="price" style="height:30px margin-block: 1rem;">
					</div>
					<div class="form-group">
  						<label for="lat" style="color:coral">Latitiude:</label>
    					<input class="form-control" type="text"  name="lat" style="height:30px margin-block: 1rem;">
					</div>
					<div class="form-group">
  						<label for="lon" style="color:coral">Longitude:</label>
    					<input class="form-control" type="text"  name="lon"style="height:30px margin-block: 1rem;">
					</div>

					<div class="row">
                        <div class="col-6" style="margin: 1rem auto;display: block;text-align: center;">
                            <input class="btn btn-primary" type="submit" name="Add">
                        </div>
                    </div>

					
				</form>
			</div>
		</div>
	</div>
<?php include "footer.php"  ?>


</body>
</html>
