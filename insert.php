<?php
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "users" ;
 
 $con = mysqli_connect($host,$user,$pass,$db);

 $uname = $_GET['username'];
 
 $name = $_POST['name'];
 $mobile = $_POST['mobile'];
 $email = $_POST['email'];
 $no = $_POST['no'];
 $from = $_POST['from'];
 $to = $_POST['to'];
 $date = $_POST['date'];
 $time = $_POST['time'];
 $operator = $_POST['operator'];
 $option = $_POST['option'];
 $type= $_POST['type'];
 $sql = "insert into user_data values ('$name','$mobile','$email','$no','$from','$to','$date','$time','$operator','$option','$type','$uname')";
 
 mysqli_query($con, $sql)

// $page = "index.php";
//$sec = "3";
?>
<html>
    <head>
    <title>Thank You For Booking A Cab</title>
   <!-- <meta http-equiv="refresh" content="3" URL="index.php"> -->
   	<meta http-equiv="refresh" content="5;url=index.php?username=<?php echo $uname?> ">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>
    
    <body>

		<div class="container" style="margin-top:180px;margin-left: 200px" >
			<div class="row" >
				<div class="col-md-6">
					<div class="text-center">
						<br><br><br>
						<h1 >Redirecting to main page....</h1>
						<h3> In 5 seconds</h3>
					</div>
				</div>
				<div class="col-md-6">
					<img src="thanku.jpg" class="img responsive" style="height: 200px;width: 400px">
				</div>
		
			</div>
		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</body>
</html>
