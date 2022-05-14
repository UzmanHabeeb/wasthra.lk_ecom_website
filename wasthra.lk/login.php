<?php

session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'wasthralk');

$usertype = '';
$username = $_POST['name'];
$pass     = $_POST['Password'];

$sql="select * from user where email='$username' && password='$pass' ";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num==1)
{
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
{
$usertype=$row["usertype"];
}



if($usertype=='0')
{echo "<script>alert('successfully login $username'); window.location='home.php';</script>";}

else if ($usertype=='1')
	{echo "<script>alert('successfully login $username'); window.location='admin.php';</script>";}

else
{
	echo "<script>alert('loging failed'); window.location = 'index.php';</script>";
}
	}
}


echo "<script>alert('loging failed'); window.location = 'index.php';</script>";
?>