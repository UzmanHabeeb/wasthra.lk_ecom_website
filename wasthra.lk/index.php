<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
<style type="text/css">
	
		.registerbtn {
  background-color: rgba(24, 83, 209, 0.24);
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}

body{

	background-image: url(./template/template.jpg);
	background-size: cover;
	/*background-attachment: fixed;*/
}

.content{
	border-radius: 20px;
	background-color: rgba(0.3,0.3,0.3,0.3);
	width: 30%;
	padding: 30px;
	margin: 60px auto;
}
.content input[type="text"],input[type="password"]{
	margin: 10px 0; 
	padding: 10px;
	border-radius: 7px;
	border:none;
}
.
.content input[type="submit"]{
	border-radius: 7px;
}
.content input[type="submit"]:hover{
	background-color: #006633;
}
	
</style>

</head>
<body>
	
	<center> <font color="yellow" size="20"><h1>Wasthra.lk</h1></font>

<div class="content">
	<hr>
	<form method="POST" action="login.php">
	<font color="white"><b>User name</b></font>
	<br>
	<input type="text" name="name" placeholder="Enter your email" size="60" required="">
	<br>
		<font color="white"><b>Password</b></font>
	<br>
	<input type="password" name="Password" placeholder="Enter your password" size="60" required="">
	<br>
	<input type="submit" class="registerbtn" name="login" size="10" value="login">
	<a href="reg.php"><input type="button" class="registerbtn" name="login" size="10" value="Register"></a>
</form>
</center>

</body>
</html>