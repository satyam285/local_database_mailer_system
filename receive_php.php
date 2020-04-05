<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "mailer";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($conn){
	$from = $_POST['from'];
	$to = $_POST['to'];
	$q = "SELECT message FROM mail_tb where s_add='$from' and r_add='$to'";
	if ($r = mysqli_query($conn,$q)){
		while($row = mysqli_fetch_assoc($r))
		{
			$m = $row['message'];
			$qu = "UPDATE mail_tb SET receive = 1 where message='$m' and s_add='$from' and r_add='$to'";
			mysqli_query($conn,$qu);
			echo $m;
			echo "<br><br><br>";
		}
	}
}
else{
die('cannot connect to the server');
}
?>