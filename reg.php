<?php

session_start();
include('config.inc');

$name=$_POST['user'];

$pass=$_POST['password'];

$ph=$_POST['ph'];

$email=$_POST['email'];
  
$qry="select * from aregister where username='$name'";

$result=mysqli_query($con,$qry);

$num = mysqli_num_rows($result);

if($num == 1)
{
echo "USER NAME ALREADY EXSIST"; 
}
else
{
  
 $reg="insert into aregister(username,password,ph,email) values ('$name', '$pass','$ph','$email')";
 mysqli_query($con, $reg);
header('location:admin.php');

}

?>