<?php
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

$sql = "INSERT INTO request VALUES ('$from','$to')";

if (mysqli_query($conn, $sql)) {
    echo "Successfully Requested";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>