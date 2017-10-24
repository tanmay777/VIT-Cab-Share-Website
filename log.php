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

if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
}


$sql = "SELECT type,username,first,last,email,mobile,password FROM user";
$result = mysqli_query($conn, $sql);

$count =1;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	if( $row["username"] == $username && $row["password"]== $password)
    	{
    		echo "Yes we did it";
    		$count = 0;
            session_start();
            $_SESSION['username'] = $username;
    		header("Location: index.php?username=$username");
			die();
    	}

       // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>"; 
    }
    if( $count ==1)
    {
    	echo "No not found";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>