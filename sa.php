<html>
<head>
<meta charset="utf-8">
<title>Submit your Artwork</title>
<link rel="stylesheet" href="styles.css">
<style>
::placeholder {
  color: white;
}
</style>
</head>
<body>
<ul>
  <li><a href="artgallery.php">HOME</a></li>
  <li><a href="sf.php">SIGN UP</a></li>
  <li><a href="lg.php">LOG IN</a></li>
   <li><a href="sa.php">SUBMIT ARTWORK</a></li>
   <li style="float:right"><a href="about.php">ABOUT</a></li>
</ul>

<div class="login-box">
<h1>SUBMIT ARTWORK</h1>
<form  action="submit.php" method="post">
<div class="textbox">
<i class="fa fa-user" aria-hidden="true"></i>
<input type="text" placeholder="Artist Name" name="name" required>
</div>

<div class="textbox">
<i class="fa fa-paint-brush" aria-hidden="true"></i>
<input type="text" placeholder="Artwork Name" name="artname" required>
</div>

<div class="textbox">
<i class="fa fa-inr" aria-hidden="true"></i>
<input type="number" placeholder="Price of Artwork" name="price" required>
</div>

<div class="textbox">
<i class="fa fa-phone-square" aria-hidden="true"></i>

<input type="tel" placeholder="ph:123567891(format)" name="ph" pattern="[0-9]{5}[0-9]{5}" required>
</div>

<div class="textbox">
<i class="fa fa-envelope" aria-hidden="true"></i>
<input type="email" placeholder="Email" name="email" required>
</div>


<input class="btn" type="submit" name="submit" value="SUBMIT">
</form>

<span style="font-color:white">
<b>NOTE:Kindly mail us the HD quality photo of your art work.
You will be redirected to home page after successfull submission.</b>
</span>
</div>
</body>
</html>
