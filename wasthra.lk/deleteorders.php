<?php require_once("./database/connection.php"); ?>
<?php

if(isset($_GET['code'])){
$sql="DELETE FROM pay WHERE code =".$_GET['code'];
mysqli_query($conn,$sql);
$result = mysqli_query($conn,$sql);
if($result){
/*		echo "sucessfull";*/
}
else{}
header("Location: myorders.php");
}
?>