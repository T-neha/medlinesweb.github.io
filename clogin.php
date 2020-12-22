<?php 
$email=$_REQUEST['email']; 
$password=$_REQUEST['password'];
include 'db.php';
$sql="SELECT * FROM cusdetail WHERE email='$email' and password='$password'";
$result=mysqli_query($con,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1) {
	//this is javascript code used here
    echo "<script>window.location.assign('index.php');</script>";
} else {
    echo "<script>window.location.assign('clogin.html');</script>";
}

$con->close();
?>