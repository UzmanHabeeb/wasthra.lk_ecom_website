<?php session_start(); ?>
<?php include('home1.php') ?>
<?php require_once("./database/connection.php"); ?>

<?php 
$sql = "SELECT * FROM mens";
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
 	<title>Users View page</title>
 	<link rel="stylesheet" type="text/css" href="usertable.css">
 </head>
 <body>
 	<table>
 		<tr class="clr">
 			<th>Item Number</th>
 			<th>Item</th>
 			<th>Description </th>
 			<th>Price</th>
 		</tr>
 		<?php 
 		while ($row = mysqli_fetch_assoc($result)) {
 		?>
 			<tr>
 				<td><?php echo $row['codeNo'] ?></td>
 				<td><?php echo '<img src="./upload_images/'.$row['photo'].'"  style="height:100px;">'; ?></td>
 				<td><?php echo $row['description'] ?></td>
 				<td><?php echo $row['price'] ?></td>
 				<?php echo "<td><a href =buyitem.php?codeNo='".$row['codeNo']."'>Pay</a> </td>"?>
 			</tr>
 			<?php  
 		} ?>
 		 
 	</table>
 </body>
 </html>
