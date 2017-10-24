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
	<h1>All Bookings</h1><br><br>
</div>



<div class="container">
	<div class="row">

		<?php
				session_start();
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "users";

				$customer = $_SESSION['username'];

				$conn = mysqli_connect($servername, $username, $password, $dbname);
				if (!$conn) {
    				die("Connection failed: " . mysqli_connect_error());
				}

				$query="SELECT * FROM user_data WHERE name NOT LIKE $customer";
				$select_all_events=mysqli_query($conn,$query);
				
				if(empty($select_all_events)){
				?>	
					<div class="col-md-12">
								<div class="panel panel-default" style="background : #DFE2DB">
  									<div class="panel-body">
  										<div class="col-md-4 text-center">
							  				<h1>No Result Found</h1>
							  			</div>
  									</div>
								</div>	
					</div>
				<?php
				}
				else
				{
				
				while($row=mysqli_fetch_assoc($select_all_events)){
				$from=$row['from1'];
				$to=$row['to1'];
				$date=$row['date'];
				$time=$row['time'];
				$name=$row['name'];
				$mobile=$row['mobile'];
				$email=$row['email'];
				$uname = $row['cust'];

				if( strcmp($uname,$customer) == 0)
				{
				?>		                    
		                    <div class="col-md-12">
								<div class="panel panel-default" style="background : #DFE2DB">
  									<div class="panel-body">
  										<div class="col-md-3 text-center">
							  				<h4> <?php echo $from ?> </h4>
		  								</div>
		  								<div class="col-md-3 text-center">
							  				<h4><?php echo $to ?></h2>
		  								</div>
		  								<div class="col-md-2 text-center">
							  				<h4> <?php echo $date ?></h2>
		  								</div>
		  								<div class="col-md-2 text-center">
							  				<h4> <?php echo $time ?> </h2>
		  								</div>
		  								<div class="col-md-2 text-center">
							  				<button class="btn btn-danger">Cancel</button>
		  								</div>

  									</div>
								</div>	
							</div>
                <?php 
            } 
        }
        } 
       ?>
		                    		               
	</div>
</div><br><br><br><br><br><br><br>

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