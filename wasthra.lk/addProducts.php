<!DOCTYPE html>
<html>
<head>
	<title>add products</title>
	<style type="text/css">
		.addbox{
			height: 500px;
			width: 600px;
			color: #ffff00;
			margin:50px auto ;
			background-color: rgba(53, 0, 71, 0.7);
			padding-top: 30px;
			border-radius: 10px;
		}
		.addbox form{
			margin-left: 130px;

		}
		.addbox input[type="text"]{
			width: 300px;
			padding: 10px;
			border: none;
			border-radius: 5px;
		}
		.addbox input[type="submit"],input[type="reset"]{
			color: white;
			background-color: #00cc66;
			display: inline-block;
			padding: 10px;
			width: 100px;
			border: none;
			border-radius: 5px;
		}
		.addbox input[type="submit"]:hover,input[type="reset"]:hover{
			background-color: #0066ff;
		}

	</style>
</head>
<body>
	<?php 
	$msg="";
	$con = mysqli_connect("localhost", "root", "", "wasthralk");
	if (!$con)
	{
		die ("Connection Failed: " . mysqli_connect_error());
	}



	if (isset ($_POST['submit']))
	{
		

		$pname = $_POST['pname'];
		$pcode = $_POST['pcode'];
		$price = $_POST['price'];
		$img_name=$_FILES['img']['name'];
		$tmp=$_FILES['img']['tmp_name'];

		move_uploaded_file($tmp, "upload_images/".$img_name);

		

		$sql = "INSERT INTO mens (description, codeNo, price, photo) VALUES ('$pname', '$pcode', '$price', '$img_name')";

		if (mysqli_query($con, $sql)) {
		  $msg="New record created successfully !!!";
		} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		}
	mysqli_close($con);


	 ?>
	<?php include 'admin.php'; ?>
	<div class="addbox">
		<form action="" method="post" action="" enctype="multipart/form-data">
			<label>MENS</label><br><br><br>
			<label>Product Code:</label><br>
			<input type="text" name="pcode" required=""><br><br>
			<label>Product Name:</label><br>
			<input type="text" name="pname" required=""><br><br>
			<label>Price:</label><br>
			<input type="text" name="price" required=""><br><br>
			<label for="img">Select image:</label><br>
			<input type="file" name="img" id="img" accept="image/*" required=""><br><br>
			<input type="submit" name="submit" value="submit">
			<input type="reset" name="reset">
		</form>
		<br><center><?php echo "$msg" ?></center>
	</div>


</body>
</html>