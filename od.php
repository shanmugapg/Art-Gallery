<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"artgallery");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="f1.css">
</head>

<body style="background-color:#DCDCDC">

<div class=" box1">
<img src="b.jpg" alt="Art Gallery" style="width:100%" height="550px">
</div>

<ul>
  <li><a href="aregister.php">add Admin</a></li>
  <li><a href="od.php">orders</a></li>
  <li><a href="aw.php">Artwork</a></li>
   <li><a href="at.php">Artists</a></li>
    <li style="float:right"><a href="aview.php">view admin</a></li>
    <li style="float:right"><a href="artgallery.php">Log out</a></li>
</ul>
<form name="form1" action="" method="post">
	<h3 style="font-family: verdana;font-size:200%;color:black;text-align: center;" ><u><b>View order details</b></u><h3>

<table>
<tr>
	    <td>Enter id_no:</td>
		<td><input type="text" name="id"></td>
	</tr>
<tr>
		<td colspan="2" align="center">
			<input type="submit" name="submit1" value="Display" style="height:50px; width:100px"/>
			<input type="submit" name="submit2" value="search" style="height:50px; width:100px"/>
		</td>
	</tr>
</table>

</form>
<?php
if(isset($_POST["submit1"]))
	{

	$res=mysqli_query($link,"select * from orders");
	     echo "<table border=1>";
         echo "<tr>";
         echo "<th>"; echo "Order-id";     echo "</th>";
         echo "<th>"; echo "Customer name";   echo "</th>";
         echo "<th>"; echo "Art-id";   echo "</th>";
         echo "<th>"; echo "Address";echo "</th>";
         echo "<th>"; echo "City";   echo "</th>";
         echo "<th>"; echo "Payment";echo "</th>";
         echo "<th>"; echo "State";  echo "</th>";
         echo "<th>"; echo "Zip";    echo "</th>";
       echo "</tr>";


     while($row=mysqli_fetch_array($res))
     { echo "<tr>";
       echo  "<td>". $row["id"]. "</td>";
       echo "<td>". $row["name"]."</td>";
       echo "<td>". $row["a_id"]."</td>";
       echo "<td>". $row["address"]  . "</td>";
       echo "<td>". $row["city"]  . "</td>";
       echo "<td>". $row["payment"]  . "</td>";
       echo "<td>". $row["state"]  . "</td>";
       echo "<td>". $row["zip"]  . "</td>";

       echo "</tr>";

     }
 echo "</table>";
}

if(isset($_POST["submit2"]))
	{

	$res=mysqli_query($link,"select * from orders where id=('$_POST[id]')");
         echo "<table border=1>";
         echo "<tr>";
         echo "<th>"; echo "id";     echo "</th>";
         echo "<th>"; echo "name";   echo "</th>";
         echo "<th>"; echo "a_id";   echo "</th>";
         echo "<th>"; echo "address";echo "</th>";
         echo "<th>"; echo "city";   echo "</th>";
         echo "<th>"; echo "payment";echo "</th>";
         echo "<th>"; echo "state";  echo "</th>";
         echo "<th>"; echo "zip";    echo "</th>";
       echo "</tr>";

while($row=mysqli_fetch_array($res))
     { echo "<tr>";
       echo  "<td>". $row["id"]. "</td>";
       echo "<td>". $row["name"]."</td>";
       echo "<td>". $row["a_id"]."</td>";
       echo "<td>". $row["address"]  . "</td>";
       echo "<td>". $row["city"]  . "</td>";
       echo "<td>". $row["payment"]  . "</td>";
       echo "<td>". $row["state"]  . "</td>";
       echo "<td>". $row["zip"]  . "</td>";

       echo "</tr>";

     }
 echo "</table>";
}
?>



</body>
</html>