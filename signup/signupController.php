<?php
session_start();
	
$servername = "localhost";
$username = "root";
$password = "#fuckmeifucan";
$dbname = "dark_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$u = $_POST['username'];
$p = md5($_POST['password']);
$d = date('Y-m-d H:i:s');
$sql = "INSERT INTO user (username, password, created_at) VALUES ('".$u."', '".$p."','".$d."')";

if($u!=''){
	if ($conn->query($sql) === TRUE) {
		$_SESSION['duplicate'] = false;
		header("Location: ../index.php"); /* Redirect browser */
		exit();
	} else {
		header("Location: signup.php"); /* Redirect browser */
		$_SESSION['duplicate'] = true;
		exit();
	}
}
else {
	header("Location: signup.php"); /* Redirect browser */
	$_SESSION['duplicate'] = true;
	exit();
}

$conn->close();
?>