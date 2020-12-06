<?php

session_start();
if(! isset($_SESSION['username'])){
header('location:lg.php');
}

?>

<html>
<head>
<title> ORDER </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="f.css">
</head>

<body style="background-color:#DCDCDC">

<div class="box2">
<img src="a.jpg" alt="Art Gallery" style="width:100%" height="550px">
</div>


<h1> Hello! <?php echo $_SESSION['username']; ?> </h1>
<hr>
<div class="box1">
<?php 
include('config.inc');
$qry="Select * from orders";
?>
<h2>PREVIOUS ORDERS!!</h2>
<table width="414" border="1" cellspacing="10" cellpadding="5" align="left">
  <tr>
    <td width="74">ARTWORK</td>
    <td width="63">PRICE</td>    
  </tr>
  <?php 
$name=$_SESSION['username'];
$qry="SELECT artwork.arname,artwork.price from register,artwork,orders where register.username=orders.name and orders.a_id=artwork.id and register.username='$name'";
$rc=mysqli_query($con,$qry);
while($tmp=mysqli_fetch_array($rc))
{
?>
  <tr>
    <td><?php echo $tmp['arname'];?></td>
    <td><?php echo $tmp['price']?></td>
  </tr>
<?php
}
?>

</table> 
<div>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="order2.php" method="post">
      <h2>ORDER NOW !!</h2>
        <div class="row">
          <div class="col-50">
          
            <label for="fname"><i class="fa fa-paint-brush"></i>ART WORK</label>
  <select name="art" required>
    <option value=1>After Rain Bliss</option>
    <option value=2>The Sparrow</option>
    <option value=3>AUTUMN COUPLE</option>
    <option value=4>Moment Of Raindrops</option>
    <option value=5>Ganesha</option>
    <option value=6>The Cool Chimp</option>
    <option value=7>Radha-Krishna</option>
    <option value=8>Vintage Wall</option>
    <option value=9>Weaver</option>
    <option value=10>The Horses</option>
    <option value=11>The Shiva</option>
    <option value=12>Enchanted Garden</option>
    <option value=13>Confusion Colors</option>
    <option value=14>Gautum Buddha</option>
    <option value=15>Lonodon Telephone Booth</option>
</select>
<hr>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street"required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York" required>
            <label for="d"><i class="fa fa-inr"></i>PAYMENT</label>
            <input type="text" id="d" name="payment" value="CASH ON DELIVERY" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001" required>
              </div>
            </div>
       <center> <input class="btn" type="submit" value="CONFIRM ORDER"></center>
      </form>
    </div>
  </div>

</div>
</div>
<left><a class="btn" href="logout.php"> LOG OUT </a><left>
</div>

<div class="content">
      <div class="blue2">
       <pre style="text-align:center;font-size:50px;font-style:oblique;color:white"><b>The Artist</b></pre>
<p style="text-align:center;font-size:20px;font-style:oblique;color:white">
The Artist is an open Art Gallery where a person can buy an Art work and may also earn money by selling
their art work through our website.This website gives benefit to those artist who are not able to show off their
work due to lack of connections, this website gives those artist a platform to showcase their talent.
</p>
      <p style="text-align:center;font-size:20px;font-style:oblique;color:white"><b><u>ABOUT-US</u></b></p>
      <p style="text-align:center;font-size:20px;font-style:oblique;color:white">XYZontact no.-9008442345)<br>PQR(Contact no.-9008442346)<br>BCG(Contact no.-9008442347)<br>UVW(Contact no.-9008442348)
      </p></div>
</div>

<div class="content">
      <div class="green2">
   <p style="text-align:center;font-size:30px;font-style:oblique;color:white"><u><b>FOLLOW US</b></u></p>
    <p style="text-align:center;font-size:30px;font-style:oblique;color:white"> Get updates on inspirational stories, local art galleries, creative ideas and more.</p>
    <p align=center><a href="https://www.facebook.com/"><img src="fb.png"style="width:5%" height="50px"></a>
<a href="https://www.instagram.com/"><img src="insta.jpg"style="width:5%" height="50p"></a></p>
   
      </div>
</div>




</body>
</html>