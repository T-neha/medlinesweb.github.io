<html>
<?php
$fname=$_REQUEST['firstname'];
$lname=$_REQUEST['lastname'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$contach=$_REQUEST['contact'];
$city=$_REQUEST['city'];
     include 'db.php';
	  $sql="INSERT INTO cusdetail VALUES('$email','$fname','$lname','$password','$contach','$city')";
	  if(mysqli_query($con,$sql))
	  {
		  echo"ragistration successfull";
		  echo"<a href='clogin.html'>LOGIN</a>";
	  }
	  else
	  {
		  
		  echo"something error<br/>";
		  echo"plzz singup once again<br/>";
		  echo"<a href='csignup.html'>click here for retry singup</a>";
	  }
	  $con->close();
	  ?>
	  </html>