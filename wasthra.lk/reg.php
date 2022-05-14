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

<body >

<?php
$servername = "localhost";
$username = "root";
$Password = "";
$dbname = "wasthralk";


// Create connection
$conn = mysqli_connect($servername, $username, $Password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$telephone=$_POST['telephone'];
	$password=$_POST['password'];

	$sql = "INSERT INTO user (name,email,telephone,password) VALUES ('$name', '$email','$telephone','$password')";

	if (mysqli_query($conn, $sql)) {
	  echo "New record created successfully";
	  header("location:index.php");
	} else {
	  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

mysqli_close($conn);
?>


<center> <font color="white" size="20"><h1>Wasthra.lk</h1></font>

<font color="yellow" size="15">Registration</font>
<br>
<div class="content">
	<hr>
	<form action="" method="post">
	<font color="white"><b>Name</b></font>
	<br>
	<input type="text" name="name" placeholder="Enter your name" size="60" required="">
	<br>
		<font color="white"><b>Email</b></font>
	<br>
	<input type="text" name="email" placeholder="Enter your Email" size="60" required="">
	<br>


		<font color="white"><b>Telephone no</b></font>
	<br>
	<input type="text" name="telephone" placeholder="Enter your Telephone no" size="60" required="">
	<br>

		<font color="white"><b>Password</b></font>
	<br>
	<input type="Password" name="password" placeholder="Enter your Password" size="60" required="">
	<br><br><br>
	<input type="submit" class="registerbtn" name="submit" size="10" value="Register">	
</form>
</div>
</center>
</body>
</html>