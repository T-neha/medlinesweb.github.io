<?php 
$userid=$_REQUEST['userid']; 
$password=$_REQUEST['password'];
include 'database.php';
$sql="SELECT * FROM shop WHERE uid='$userid' and password='$password'";
$result=mysqli_query($con,$sql);

// Mysql_num_row is counting table row
//$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
//if ($count==1) {
	//this is javascript code used here
    echo "<script>window.location.assign('shopkeeper.html');</script>";
//}

$con->close();
?>