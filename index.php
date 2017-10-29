<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VIT CAB SHARE</title>
    <link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/5b1ca6f502.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  </head>
  <body>

  <?php
session_start();
 /* if(isset($_GET['username']  ) )
  {
    $login= $_GET['username'];
  }
  else
  {
    $login="Sign In";  
  }

*/

if(isset($_SESSION['username']  ) )
  {
    $login=$_SESSION['username'];
  }
  else
  {
    $login="Sign In";  
  }



  ?>
    
  <nav class="navbar navbar-inverse navbar-fixed">
    <div class="container-fluid" >
      <div class="navbar-header">
        <a class="navbar-brand" style="font-family: 'Cedarville Cursive', cursive; font-weight: bold;" href="#">VIT CAB SHARE</a>
      </div>
      <ul class="nav navbar-nav" style="margin-left:280px;">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="your-taxi/site/index-1.html">About</a></li>
        <li><a href="your-taxi/site/index-2.html">Cars</a></li>
        <li><a href="your-taxi/site/index-3.html">Services</a></li>
        <li><a href="your-taxi/site/index-4.html">Contact us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.html"><?php echo $login ?></a></li>
        <?php
        if(strcmp($login,"Sign In") )
        {
        	echo '<li><a href="signout.php">Logout</li>';
        }

        ?>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="text-right col-md-5">
        <img style="height:100px;width: 100px;" src="taxi.png" />
      </div>
      <div class="text-left col-md-7">
        <h1>Book My Cab</h1>
        <h4>Search Share Relax</h4>
      <br>      
      </div>
    </div>
  </div>

  

   <div class="container-fluid">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img style="height:500px;width:100%" src="taxi1.jpg" alt="Chania">
        </div>
        <div class="item">
          <img style="height:500px;width:100%" src="taxi2.jpg" alt="Chania">
        </div>

        <div class="item">
          <img style="height:500px;width:100%" src="taxi3.jpg" alt="Flower">
        </div>
      </div>

      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div> 
  </div> 
    
  <br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="col-md-6 text-right">
          <img style="height:100px;width:100px;" src="clock.jpg">
        </div>
        <div class="col-md-6">
          <h1>Fast and Safe</h1>
        </div>
      </div>
      <div class="col-md-4">
        <div class="col-md-6 text-right">
          <img style="height:100px;width:100px;" src="like.jpg">
        </div>
        <div class="col-md-6">
          <h1>Best Prices</h1>
        </div>
      </div>
      <div class="col-md-4">
        <div class="col-md-6 text-right">
          <img style="height:100px;width:150px;" src="share.jpg">
        </div>
        <div class="col-md-6">
          <h1>Sharing</h1>
        </div>
      </div>
    </div>  
  </div>

  <br><br>
  <div class="container-fluid">
    <div style="background-color:#ff947b;color: white " class="row">
      <div class="text-center">
         <h1>Call Now</h1>
         <h1>1800 559 6580</h1>
         <br>
      </div>
    </div>
  </div>

<!--
  <div class="text-center">
    <br>
    <h1>Search</h1>
    <br>
  </div>

  <form>
    <div class="container">
    <div class="form-group">
      <label for="Date">Date</label>
      <input type="date" class="form-control" id="datepicker">
    </div>
    <div class="form-group">
      <label for="from">From</label>
      <select class="form-control" id="from">
        <option>VIT Hostel</option>
        <option>Chennai Airport</option>
        <option>Bangalore Airport</option>
        <option>Katpadi Railway Station</option>
      </select>
    </div>
    <div class="form-group">
      <label for="to">To</label>
      <select class="form-control" id="to">
        <option>VIT Hostel</option>
        <option>Chennai Airport</option>
        <option>Bangalore Airport</option>
        <option>Katpadi Railway Station</option>
      </select>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    <br><br><br>
    </div>
</form>


-->

  <div class="text-center" style="margin-bottom: 50px;">
    <br>
    <h1>Options</h1><br>
    <h4><i>You can use these options only if you are logged in </i></h4>
    <br>
  </div>


<?php

if( strcmp($login,'Guest') ==0)
{
  echo 
  '<div class="container"><div class="row" style="margin-bottom: 100px;">
    <div class="col-md-3">
      <button style="margin-left: ; padding-left: 100px;padding-right:100px ;padding-bottom:50px; ;padding-top:50px ;" class="btn btn-primary btn-lg" disabled>Book</button>
    </div>
    <div class="col-md-3">
      <button style="margin-left: ;padding-left: 100px;padding-right:100px ;padding-bottom:50px ;padding-top:50px ;" class="btn btn-success btn-lg" disabled>Share</button>
    </div>
    <div class="col-md-3">
      <button style="margin-left: ;padding-left: 75px;padding-right:75px ;padding-bottom:50px ;padding-top:50px ;" class="btn btn-info btn-lg" disabled>Requests</button>
    </div>
    <div class="col-md-3">
      <button style="margin-left: ;padding-left: 75px;padding-right:75px ;padding-bottom:50px ;padding-top:50px ;" class="btn btn-warning btn-lg text-center" disabled>My Bookings</button>
    </div>
  </div></div>' ;
}
else
{
echo 
  '<div class="container"><div class="row" style="margin-bottom: 100px;">
    <div class="col-md-3">
      <a href="book.php?username='.$login.'"><button style="margin-left: ; padding-left: 100px;padding-right:100px ;padding-bottom:50px; ;padding-top:50px ;" class="btn btn-primary btn-lg" >Book</button></a>
    </div>
    <div class="col-md-3">
      <a href="showall.php?username='.$login.'"><button style="margin-left: ;padding-left: 100px;padding-right:100px ;padding-bottom:50px ;padding-top:50px ;" class="btn btn-success btn-lg" >Share</button></a>
    </div>
    <div class="col-md-3">
      <a href="showrequest.php?username='.$login.'"><button style="margin-left: ;padding-left: 75px;padding-right:75px ;padding-bottom:50px ;padding-top:50px ;" class="btn btn-info btn-lg" >Requests</button><a>
    </div>
    <div class="col-md-3">
      <a href="showbooking.php?username='.$login.'"><button style="margin-right: ;padding-left: 75px;padding-right:75px ;padding-bottom:50px ;padding-top:50px ;" class="btn btn-warning btn-lg" >My Bookings</button><a>
    </div>
  </div></div>';

}
?>

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>