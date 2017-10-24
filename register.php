<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

//$customer = $_GET['customer'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit']))
{
	$type = "user";
	$username = $_POST['username'];
	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];
}

$sql = "INSERT INTO user VALUES ('$type', '$username','$first','$last','$email','$mobile','$password')";

if (mysqli_query($conn, $sql)) {
	session_start();
	$_SESSION['username'] = $username;
    header('location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>