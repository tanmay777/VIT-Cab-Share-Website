<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VIT CAB SHARE</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/5b1ca6f502.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  </head>

  <body >

<div class="container-fluid" style="background: #CBE32D">
	<h1 style="margin-left: 50px;margin-bottom: 30px;margin-top: 30px;">Book my Cab</h1>
</div>

<div class="container-fluid text-center">
	<h1>Requests</h1><br><br>
</div>



<div class="container" >
	<div class="row">

		<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "users";

				$customer = $_GET['username'];

				$conn = mysqli_connect($servername, $username, $password, $dbname);
				if (!$conn) {
    				die("Connection failed: " . mysqli_connect_error());
				}


				$query="SELECT * FROM request ";
				$select_all_events=mysqli_query($conn,$query);
				
				while($row=mysqli_fetch_assoc($select_all_events)){
				$from=$row['from1'];
				$to=$row['to1'];
				
				if(strcmp($to,$customer)==0)
				{

					$w ="SELECT * FROM user_data where cust='$to' ";
					$select_all=mysqli_query($conn,$w);

					while($a=mysqli_fetch_assoc($select_all))
					{
						$from1 = $a['from1'];
						$to1 = $a['to1'];
						$date = $a['date'];
						$time = $a['time'];
						$operator = $a['operator'];
						$option1 = $a['option1'];
						$type = $a['type'];
					}

					$q="SELECT * FROM user where username='$from' ";
					$select_all_event=mysqli_query($conn,$q);
					while($r=mysqli_fetch_assoc($select_all_event)){
					$first= $r['first'];
					$last = $r['last'];
					$mobile =$r['mobile'];
					$email = $r['email'];
				?>		                    
		                    <div class="col-md-12">
								<div class="panel panel-default" style="background : #DFE2DB">
  									<div class="panel-body">
  										<div class="col-md-4 text-center">
							  				<h1><?php echo $first ?></h1>
							  				<h1><?php echo $last ?></h1><br><br>
		  								</div>
		  								<div class="col-md-4 text-center">
							  				<h4><?php echo $email ?></h2>
							  				<h4><?php echo $mobile ?></h2>
							  				<br><br>
		  								</div>
		  								<div class="col-md-4 text-center" style="margin-top: 75px">
		  									<a href="confirmrequestbyrequest.php?cust=<?php echo $from; ?>&name=<?php echo $first; ?>&mobile=<?php echo $mobile; ?>&email=<?php echo $email; ?>&from=<?php echo $from1; ?>&to=<?php echo $to1; ?>&date=<?php echo $date; ?>&time=<?php echo $time; ?>&operator=<?php echo $operator; ?>&option=<?php echo $option1; ?>&type=<?php echo $type; ?>&own=<?php echo $to; ?>"><button class="btn btn-info" style="padding: 25px 50px">Confirm</button>
		  								</div>
  									</div>
								</div>	
							</div>
                <?php } } } ?>
		                    		               
		<div class="text-center">
			<a href="book.php"><button type="button" class="btn btn-danger text-center">BOOK A DIFFERENT CAB</button></a><br><br>
		</div>
	</div>
</div>

<div class="container-fluid" style="background-color:#222222;color:white;">
  <div class="text-center">
    <h1>Contact Us</h1>
    <br><br>
  </div>

  <div class="col-md-4">
    <h2>Book My Cab</h2>
    <h4>All rights reserved</h4>
  </div>
  <div class="col-md-4">
    <h4><i class="fa fa-facebook fa-3x"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-twitter fa-3x">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i><i class="fa fa-instagram fa-3x"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-linkedin fa-3x"></i></h4>
  </div>
  <div class="col-md-4 text-right">
    <h4>VIT University</h4>
    <h4>Vellore Tamilnadu 632014</h4>
  </div>
</div>




</body>