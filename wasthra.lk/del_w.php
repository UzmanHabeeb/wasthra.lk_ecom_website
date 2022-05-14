<?php require_once("./database/connection.php"); ?>
<?php

if(isset($_GET['codeNo'])){
$sql="DELETE FROM womens WHERE codeNo =".$_GET['codeNo'];
mysqli_query($conn,$sql);
$result = mysqli_query($conn,$sql);
if($result){
/*		echo "sucessfull";*/
}
else{}
header("Location: deletewomens.php");
}
?>