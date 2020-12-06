<?php
session_start();
include('config.inc');

$msg="";

$aname =$_POST['name'];

$arname = $_POST['artname'];

$cost = $_POST['price'];

$pn = $_POST['ph'];

$mail = $_POST['email'];

$q="insert into artist(aname,ph,email) values ('$aname','$pn','$mail')";

mysqli_query($con,$q);

$qry="insert into artwork(arname,price) values ('$arname','$cost')";

mysqli_query($con,$qry);

if($q && $qry)
{
header('location:artgallery.php'); 
}

?>



