<?php
ini_set('display_errors',0);
// //include "pdo.php";
$j=file_get_contents('users.json');
$json=json_decode($j,true);
$date=(date("Y-m-d"));
//$mdate=($date['year']."-".$date['mon']."-".$date['mday']);
//print_r($json[0]);
foreach($json as $row)
{
	print_r($row);
	if($date==$row['remdate'])
	{
		$email=$row['email'];
		$subject="remainder";
		$headers = 'From: designprjct19@gmail.com' . "\r\n". 
		  'Reply-To: designprjct19@gmail.com' . "\r\n" . 
		  'X-Mailer: PHP/' . phpversion();
		$message= "remainder for the second dose of vaccination";	mail($email,$subject,$message,$headers);
		
		echo("done");
	}

}
// $email="designprjct19@gmail.com";
// $subject="remainder";
// $headers = 'From: designprjct19@gmail.com' . "\r\n". 
//   'Reply-To: designprjct19@gmail.com' . "\r\n" . 
//   'X-Mailer: PHP/' . phpversion();
// $message= "jeo";
// mail($email,$subject,$message,$headers);
// echo("done");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Remainder</title>
</head>
<body>




</body>
</html>
