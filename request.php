<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$from = $_GET['from'];
$to = $_GET['to'];
$from_user=$_GET['from_user'];
$to_user=$_GET['to_user'];

$customer = $_SESSION['username'];

$sql = "INSERT INTO request(from1,to1) VALUES ('$from_user','$to_user')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql="SELECT * FROM user WHERE username='$to_user'";

$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);    
$to_email=$row['email'];

mysqli_close($conn);

header("Location: https://vitcabshare.000webhostapp.com/mail/request_confimation_mail.php?to_user=$to_user&from=$from&to=$to&to_email=$to_email&from_user=$from_user");

?>