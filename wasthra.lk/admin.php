<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<link rel="stylesheet" type="text/css" href="Newadmi.css">

</head>
<body>
	<br><br>
<center><font size="100" color="purple">WELCOME</font></center>


		<div class="navi">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="myorders.php">My Orders</a></li>
				
				<li class="dropdown">
					<a href="javascript:void(0)" class="dropbtn">Add Products</a>
					<div class="cont_dropdown">
						<a href="addProducts.php">Mens</a>
						<a href="add1Products.php">Kids</a>
						<a href="add2Products.php">Womens</a>
					</div>
				</li>
				<li class="dropdown">
					<a href="javascript:void(0)" class="dropbtn">Delete Products</a>
					<div class="cont_dropdown">
						<a href="deletemens.php">Mens</a>
						<a href="deletekids.php">Kids</a>
						<a href="deletewomens.php">Womens</a>
					</div>

				</li>
				<li><a href="logout.php">Logout</a></li>

			</ul>
		</div>

</body>
</html>