<?php
$host = "localhost";
 $user = "root";
 $pass = "";
 $db = "users" ;
 
 $con = mysqli_connect($host,$user,$pass,$db);
 $id = $_GET['id'];

 $sql = "delete from user_data where id='$id'";
 mysqli_query($con, $sql);

 ?>

 <html>
    <head>
    <title>You Order will be cancelled.</title>
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
		<script >
			setTimeout(function(){ 
				window.location.href = "index.php";
			 }, 3000);
		</script>
		

	</body>
</html>