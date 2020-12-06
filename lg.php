<html>
<head>
<meta charset="utf-8">
<title>Login form</title>
<link rel="stylesheet" type="text/css" href="s.css">
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
   <li style="float:right"><a href="admin.php">ADMIN</a></li>
</ul>
</ul>
<div class="login-box">
<h1>LOG IN</h1>
<form  action="valid.php" method="post">
<div class="textbox">
<i class="fa fa-user" aria-hidden="true"></i>
<input type="text" placeholder="Username" name="user" required>
</div>

<div class="textbox">
<i class="fa fa-lock" aria-hidden="true"></i>  
<input  type="password" placeholder="Password" color="white" name="password" required>
</div>
<input class="btn" type="submit" name="submit" value="SIGN-UP">

</form>

</div>
</body>
</html>
