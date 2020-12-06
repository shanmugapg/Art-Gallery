
<html>
<head>
<meta charset="utf-8">
<title>Regestration form</title>
<link rel="stylesheet" type="text/css" href="s.css">
<style>
::placeholder {
  color: white;
}
</style>
</head>
<body>

<div class="login-box">
<h1>ADD ADMIN</h1>
<form action="reg.php" method="post">



<div class="textbox">
<i class="fa fa-user" aria-hidden="true"></i>
<input type="text" placeholder="Username" name="user" required>
</div>

<div class="textbox">
<i class="fa fa-lock" aria-hidden="true"></i>  
<input  type="password" placeholder="Password" color="white" name="password" required>
</div>
<div class="textbox">
<i class="fa fa-phone-square" aria-hidden="true"></i>

<input type="tel" placeholder="ph:123567891(format)" name="ph" pattern="[0-9]{5}[0-9]{5}" required>
</div>

<div class="textbox">
<i class="fa fa-envelope" aria-hidden="true"></i>
<input type="email" placeholder="Email" name="email" required>
</div>

<input class="btn" type="submit" name="submit" value="ADD">
<a href="ahome.php" input class="btn" type="submit" name="submit" value="Back"> Back </a>
</form>
</div>
</body>
</html>