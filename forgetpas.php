<?php
include 'db.php';
$email=$_REQUEST['email'];
$confirmpassword=$_REQUEST['confirmpassword'];
$query="UPDATE cusdetail SET password='$confirmpassword' WHERE email='$email'";
if(mysqli_query($con,$query))
{
	echo"records updates sucessfully!!!";
	    echo "<script>window.location.assign('clogin.html');</script>";

}
else
{
	echo"error".mysqli_error($con);
}
?>