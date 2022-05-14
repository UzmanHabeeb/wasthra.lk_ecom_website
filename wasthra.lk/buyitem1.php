<?php session_start(); ?>
<?php require_once("./database/connection.php"); ?>
<?php 
	if (isset($_GET['codeNo'])) {
		$sql1 = "SELECT * FROM womens WHERE codeNo =".$_GET['codeNo'];
		$result = mysqli_query($conn, $sql1);
		$row = mysqli_fetch_assoc($result);

		if ($result) {
			//echo "Sucessfull";
		}
		else {
			echo "Failed";
		}
	}

if (isset($_POST['pay'])) {

	$description = $_POST['description'];
	$codeNo = $_POST['codeNo'];
	$price = $_POST['price'];
	$address = $_POST['address'];
	$phoneNO = $_POST['contact'];
	$cardNo = $_POST['cardDetails'];
	$size = $_POST['size'];


	$sql2 = "INSERT INTO pay (pname,code,size,tphone,address,amount,card) VALUES('$description','$codeNo','$size','$phoneNO','$address','$price','$cardNo')";
	$result2 = mysqli_query($conn, $sql2);
	echo "<script> alert('Your order is on the way') </script>";
	header("location: sucsess.html");

}

if (!isset($_GET['codeNo']) && !isset($_POST['pay'])) {
	header("location: sucsess.html");
}
 ?>



<!DOCTYPE html>
 <html>
 <head>
 	<title>Orders</title>
<style type="text/css">

body{

	background-image: url(./template/wood-texture-background-pine-82256.jpg);
	background-size: cover;
}

</style>

 </head>
 <body>
 	<div class="order">
 		<form action="buyitem1.php" method="post">
 			<fieldset>
 				<h1 align="center"><b>Order Now</b></h1>
 				
 				<p>
 				<p>
 					<label><b>Photo</b> </label>
 					<?php echo "<input type='text' name='photo' required value=".$row['photo']." readonly>"; ?>
 				</p>
 					<label><b>Code No</b> </label>
 					<?php echo "<input type='text' name='codeNo' required value=".$row['codeNo']." readonly>";  ?>
 				</p>
 				<p>
 					<label><b>Description</b> </label>
 					<?php echo "<textarea name= 'description' readonly>".$row['description']."</textarea>"; ?>
 				</p>
 				<p>
 					<label><b>Price</b></label>
 					<?php echo "<input type='text' name='price' required value = ".$row['price']." readonly>"; ?>
 				</p>
 				<p>
 					<label><b>Address </b></label>
 					<textarea name="address" rows="4" cols="50"></textarea>
 				</p>
 				<p>
 					<label><b>Contact No</b></label>
 					<input type='int' name='contact' >
 				</p>
 				<p>
 					<label><b>Card Details</b></label>
 					<input type='int' name='cardDetails' >
 				</p>
 				<p>Please select your size:</p>
					<input type="radio"  name="size" value="XL">
					<label>XL</label><br>
 					<input type="radio" name="size" value="L">
					<label>L</label><br>
					<input type="radio" name="size" value="M">
					<label>M</label><br>
					<input type="radio" name="size" value="S">
					<label>S</label>
 				
 				<p align="center">
 					<button type="submit" name="pay" value="pay"><b>Pay</b></button>
 				</p>
 				<p align="center">
 					<a href="home.php"><button type="button" name="view"><b>Back to Home</b></button></a>
 				
 			</fieldset>
 		</form>
 	</div>
 
 </body>
 </html>