<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "mailer";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($conn){
	$from = $_POST['from'];
	$to = $_POST['to'];
	$message = $_POST['message'];
	$q = "INSERT INTO mail_tb(s_add,r_add,message,sent) VALUES ('$from', '$to', '$message', 1)";
	if (mysqli_query($conn,$q)){
		echo "MAIL SENT";
	}
}
else{
die('cannot connect to the server');
}
?>