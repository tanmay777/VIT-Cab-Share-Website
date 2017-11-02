<?php
// the message
$name=$_GET['to_user'];
$to_email=$_GET['to_email'];
$from = $_GET['from'];
$to = $_GET['to'];
$from_user=$_GET['from_user'];

$msg = "Congratualation $name \n"."$from_user has requested to travel with you from $from to $to"."\nPlease open <a href='http://localhost/project/bookmycab/'>VIT Cabs Share</a> to confirm the request;

// send email
mail($to_email,"Travelling Request",$msg);
?>

<script>
setTimeout(function() {
  window.location.href = "http://localhost/project/bookmycab/index.php";
}, 3000);
</script>





