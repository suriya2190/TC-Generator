<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "validator";
$conn = mysqli_connect($servername,$username,$password,$db);
$uname = $_POST["username"];
$upass = $_POST["password"];
$ret=mysqli_query( $conn, "SELECT * FROM validator WHERE username='$uname' AND password='$upass' ") or die("Could not execute query: " .mysqli_error($conn));
$row = mysqli_fetch_assoc($ret);
		if(!$row) {
header('location: wrongusername.html');
		}
		else {
	        session_start();
	        $_SESSION['user']=$user;
			header('location: tc2.html');
		}
?>
