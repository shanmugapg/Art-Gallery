<?php
$hostname='localhost';
$dbname='artgallery';
$username='root';
$password='';

$con=mysqli_connect($hostname, $username, $password);
mysqli_select_db($con, $dbname);

?>
