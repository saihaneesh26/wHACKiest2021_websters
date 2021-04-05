<?php
//ini_set('display_errors',0);
// //include "pdo.php";
$j=file_get_contents('users.json');
$json=json_decode($j,true);
$date=(date("Y-m-d"));
//$mdate=($date['year']."-".$date['mon']."-".$date['mday']);
//print_r($json[0]);
$i=0;
foreach($json as $row)
{
	if($date==$row['remdate']&&$row['status']=="true")
	{
		$email=$row['email'];
		$subject="remainder";
		$headers = 'From: mail' . "\r\n". 
		  'Reply-To: mail' . "\r\n" . 
		  'X-Mailer: PHP/' . phpversion();
		$message= "remainder for the second dose of vaccination";
		//mail($email,$subject,$message,$headers);
		unset($json[$i]);
		file_put_contents('users.json', $json);
		echo("Done");
	}
	$i+=1;
}
$j=file_get_contents('users.json');
$json=json_decode($j,true);
print_r($json);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Remainder</title>
</head>
<body>




</body>
</html>
