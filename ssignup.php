<html>

<?php
$shop=$_REQUEST['shopname'];
$fname=$_REQUEST['firstname'];
$lname=$_REQUEST['lastname'];
$userid=$_REQUEST['userid'];
$password=$_REQUEST['password'];
$contact=$_REQUEST['contact'];
$email=$_REQUEST['email'];
     include 'database.php';
	  $sql="INSERT INTO shop VALUES('$shop','$fname','$lname','$email','$userid','$password','$contact')";
	  if(mysqli_query($con,$sql))
	  {
		  echo"ragistration successfull";
		  echo "<script>window.location.assign('slogin.html');</script>";
		
	  }
	  else
	  {
		  echo"something error<br/>";
		  echo"plzz singup once again<br/>";
		  echo"<a href='ssignup.html'>click here for retry singup</a>";
	  }
	  $con->close();
	  ?>
	  </html>