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

  <body>
  
	 <div class="container-fluid" style="background: #CBE32D">
		<h1 style="margin-left: 50px;margin-bottom: 30px;margin-top: 30px;"><a href="index.php">Book my Cab</a></h1>
	</div>

	<?php 
		session_start();
		$uname = $_SESSION['username'];
	?>


  	<h1 class="text-center">Book</h1><br>
  	<h4 class="text-center">We provide you with the Best, Affordable, and Reliable cab service.<br> Our service is trusted and secured. Just provide your details and we will contact you back.</h4><br>
	<div class="container">
	  	<form action='insert.php?username=<?php echo $uname ?>' method='post'>
	  		<div class="form-group">
	    		<label for="name">Name</label>
	    		<input type="text" class="form-control" id="name" name="name">
	  		</div>

	  		<div class="form-group">
	    		<label for="phone">Phone number</label>
	    		<input type="number" class="form-control" id="phone" name="mobile">
	  		</div>

	  		<div class="form-group">
	    		<label for="email">Email address:</label>
	    		<input type="text" class="form-control" id="email" name="email">
	  		</div>

	  		<div class="form-group">
	    		<label for="no">Number of people</label>
	    		<input type="number" class="form-control" id="no" name="no">
	  		</div>

	  		<div class="form-group">
	    		<label for="from">From</label>
	    		<select class="form-control" id="from" name="from">
			        <option value="VIT Hostel">VIT Hostel</option>
			        <option value="Chennai Airport">Chennai Airport</option>
			        <option value="Bangalore Airport">Bangalore Airport</option>
			        <option value="Katpadi Railway Station">Katpadi Railway Station</option>
			     </select>
	  		</div>
	  		<div class="form-group">
	    		<label for="to">To</label>
	    		<select class="form-control" id="to" name="to">
        			<option value="VIT Hostel">VIT Hostel</option>
        			<option value="Chennai Airport">Chennai Airport</option>
        			<option value="Bangalore Airport">Bangalore Airport</option>
        			<option value="Katpadi Railway Station">Katpadi Railway Station</option>
      			</select>
	  		</div>
	  		<div class="form-group">
	    		<label for="date">Date</label>
	    		<input type="date" class="form-control" id="date" name="date">
	  		</div>
	  		<div class="form-group">
	    		<label for="time">Time</label>
	    		<input type="time" class="form-control" id="time" name="time">
	  		</div>

	  		<!-- <button type="submit" class="btn btn-default">Submit</button> -->
	  		<br>

	  		<h1 class="text-center">Select Cab Details </h1><br>
	  		<a href="rate.html"><h2  style="margin-left: 500px;">Price Chart </h2></a><br><br>

			<div class="form-group">
	    		<label for="Operator">Operator</label><br>
	    		<select name="operator" id="Operator" class="form-control">
  					<option value="Ola">Ola</option>
  					<option value="Uber">Uber</option>
				</select>
	  		</div>

			<div class="form-group">
				<label for="option">Type</label><br>
	    		<select name="option" id="option" class="form-control">
  					<option value="Carrier">Carrier</option>
  					<option value="Without Carrier">WithoutCarrier</option>
				</select>
	  		</div>
	  		
	  		<b>Preference</b>
	  		<div class="radio">
	    		<label><input type="radio" value="AC" name="type" id="type" > AC </label><br>
	    		<label><input type="radio" value="NAC" name="type" id="type"> NON AC </label>
	  		</div><br>

	  		
	  		<button type="submit" class="btn btn-default">Submit</button><br><br><br>
		</form>

	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				<h4>Note: We provide you with the Cab Only. If you wish to share your cab with others, kindly click here to find co-travellers.</h4>
			</div>
		</div>
		
	</div><br><br><br>


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