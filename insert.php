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
 $sql = "insert into user_data(name,mobile,email,no,from1,to1,date,time,operator,option1,type,cust) values ('$name','$mobile','$email','$no','$from','$to','$date','$time','$operator','$option','$type','$uname')";
 
mysqli_query($con, $sql);

header("Location: https://vitcabshare.000webhostapp.com/mail/booking_confirmation_mail.php?name=$name&email=$email&from=$from&to=$to");

// $page = "index.php";
//$sec = "3";

?>