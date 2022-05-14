<?php session_start(); ?>
<?php include('admin.php') ?>
<?php require_once("./database/connection.php"); ?>

<?php 
$sql = "SELECT * FROM pay";
$result = mysqli_query($conn, $sql);

if ($result) {
	//echo "sucessfull";
}else {
	echo "failed";
} 
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>my orders</title>
 	<link rel="stylesheet" type="text/css" href="usertable.css">

 </head>
 <body>
 	<table>
 		<tr class="clr">
 			<th>Code Number</th>
<!--  			<th>Item</th> -->
 			<th> Address</th>
 			<th> Contact no</th>
 			<th>Size</th>
 			<th>Price</th>
 		</tr>
 		<?php 
 		while ($row = mysqli_fetch_assoc($result)) {
 		?>
 			<tr>
 				<td><?php echo $row['code'] ?></td>

 				<td><?php echo $row['address'] ?></td>
 				<td><?php echo $row['tphone'] ?></td>
 				<td><?php echo $row['size'] ?></td>
 				<td><?php echo $row['amount'] ?></td>
				<?php echo "<td><a href =deleteorders.php?code='".$row['code']."'>Delete</a> </td>"?>
 			</tr>
 			<?php  
 		} ?>
 		 
 	</table>
 </body>
 </html>
