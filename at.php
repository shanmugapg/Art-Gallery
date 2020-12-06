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
  <h3 style="font-family: verdana;font-size:200%;color:black;text-align: center;" ><u><b>View Artist details</b></u><h3>

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

  $res=mysqli_query($link,"select * from artist");
       echo "<table border=1>";
         echo "<tr>";
         echo "<th>"; echo "Artist-id";     echo "</th>";
         echo "<th>"; echo "Artist Name";   echo "</th>";
         echo "<th>"; echo "Phone no.";   echo "</th>";
         echo "<th>"; echo "Email";echo "</th>";
         
       echo "</tr>";


     while($row=mysqli_fetch_array($res))
     { echo "<tr>";
       echo  "<td>". $row["id"]. "</td>";
       echo "<td>". $row["aname"]."</td>";
       echo "<td>". $row["ph"]."</td>";
       echo "<td>". $row["email"]  . "</td>";
      

       echo "</tr>";

     }
 echo "</table>";
}

if(isset($_POST["submit2"]))
  {

  $res=mysqli_query($link,"select * from artist where id=('$_POST[id]')");
         echo "<table border=1>";
         echo "<tr>";
         echo "<th>"; echo "id";     echo "</th>";
         echo "<th>"; echo "aname";   echo "</th>";
         echo "<th>"; echo "ph";   echo "</th>";
         echo "<th>"; echo "email";echo "</th>";
         
       echo "</tr>";

while($row=mysqli_fetch_array($res))
     { echo "<tr>";
       echo  "<td>". $row["id"]. "</td>";
       echo "<td>". $row["aname"]."</td>";
       echo "<td>". $row["ph"]."</td>";
       echo "<td>". $row["email"]  . "</td>";
      
       echo "</tr>";

     }
 echo "</table>";
}
?>



</body>
</html>