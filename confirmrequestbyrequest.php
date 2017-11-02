<?php
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "users" ;
 
 $con = mysqli_connect($host,$user,$pass,$db);
 
 $name = $_GET['name'];
 $mobile = $_GET['mobile'];
 $email = $_GET['email'];
 $no = $_GET['mobile'];
 $from = $_GET['from'];
 $to = $_GET['to'];
 $date = $_GET['date'];
 $time = $_GET['time'];
 $operator = $_GET['operator'];
 $option = $_GET['option'];
 $type= $_GET['type'];
 $cust = $_GET['cust'];
 $own = $_GET['own'];

$sql = "insert into user_data(name,mobile,email,no,from1,to1,date,time,operator,option1,type,cust) values ('$name','$mobile','$email','$no','$from','$to','$date','$time','$operator','$option','$type','$cust')";

$sql1 = "delete from request where from1='$cust' and to1='$own' ";
 
 mysqli_query($con, $sql);
 mysqli_query($con, $sql1);

 header("Location: https://vitcabshare.000webhostapp.com/mail/bookingRequestConfirmed.php?name=$name&email=$email&from=$from&to=$to");

// $page = "index.php";
//$sec = "3";
?>

