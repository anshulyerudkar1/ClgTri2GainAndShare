<?php include 'dbcon.php';?>

<?php
$name = mysqli_real_escape_string($con, $_POST['uname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['pass']);
$cpassword = mysqli_real_escape_string($con, $_POST['cpass']);

if($password==$cpassword)
 {
	// attempt insert query execution
	$sql = "INSERT INTO usermstr (name,email,password) VALUES ('$name', '$email', '$password')";
	if(mysqli_query($con, $sql))
	{
   		 echo "<script>
   			 window.location.href='http://localhost:8081/gns/Gain&Share/home.php';
			 alert('Account created successfully');
		</script>";
    	
	} 
	else
	{
   		echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	}
}
else
{
		
	header("Location:http://localhost:8081/gns/Gain&Share/home");
	
}

// close connection
mysqli_close($con);
?>