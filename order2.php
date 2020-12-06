<?php

session_start();
include('config.inc');

$art=$_POST['art'];

$add=$_POST['address'];

$city=$_POST['city'];

$pay=$_POST['payment'];

$state=$_POST['state'];

$zip=$_POST['zip'];

$name=$_SESSION['username'];

$q="insert into orders(name,a_id,address,city,payment,state,zip) values ('$name','$art','$add','$city','$pay','$state','$zip')";
mysqli_query($con,$q);

if($q)
{
echo "<script>alert('ORDER CONFIRMED')</script>";
echo "<h1>THANK YOU FOR SHOPPING !! </h1>";
echo "<h2>HAVE A NICE DAY</h2>"; 
echo "<h2>YOUR ORDER WILL BE DELIVERD SOON !!</h2>"; 
}
?>

<body><center><button><a href="logout.php"> LOG OUT </a></button></center></body>