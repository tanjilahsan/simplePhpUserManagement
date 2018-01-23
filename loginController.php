<?php session_start();
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
$sql = "SELECT * FROM user WHERE username="."'".$_POST['username']."'";
$result = $conn->query($sql);
//var_dump ($sql);
		//exit();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		//var_dump($row['password']==md5($_POST['password']));
		//exit();
        if($row['password']==md5($_POST['password']))
		{
			$_SESSION['loggedUser'] = $row['username'];
			$_SESSION['loggedin'] = 'yes';
			header("Location: bluewhale/index.php"); /* Redirect browser */
			exit();
		}
		else{
			$_SESSION['wrongPass'] = 'yes';
			header("Location: index.php"); /* Redirect browser */
			exit();
		}
    }
} 
else {
    $_SESSION['wrongPass'] = 'yes';
	header("Location: index.php"); /* Redirect browser */
	exit();
}
$conn->close();