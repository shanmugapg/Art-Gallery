<?php

session_start();

include('config.inc');

$name=$_POST['user'];

$pass=$_POST['password'];

$qry="select * from aregister where username='$name' && password='$pass' ";

//$c=mysqli_query($con, $qry);

$result=mysqli_query($con,$qry);

$num = mysqli_num_rows($result);

if($num == 1)
{
 
$_SESSION['username'] = $name;

header('location:ahome.php');  
}
else
{
echo "<script>alert('Ivalid username or password')</script>"; 
}


?>