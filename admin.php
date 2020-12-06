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
<div class="login-box">
<h1>Admin LOG IN</h1>
<form  action="valid2.php" method="post">
<div class="textbox">
<i class="fa fa-user" aria-hidden="true"></i>
<input type="text" placeholder="Username" name="user" required>
</div>

<div class="textbox">
<i class="fa fa-lock" aria-hidden="true"></i>  
<input  type="password" placeholder="Password" color="white" name="password" required>
</div>
<input class="btn" type="submit" name="submit" value="Login">
<a href="artgallery.php" input class="btn" type="submit" name="submit" value="Back"> Home </a>

</form>

</div>
</body>
</html>