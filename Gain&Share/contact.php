<?php
	include 'dbcon.php';
?> 
<?php
	if(isset($_POST['send']))
    {
 	    	echo $namee=$_POST['name'];
	  		echo $mails=$_POST['mail'];
	    	$messages=$_POST['message'];
	    	$sql = "INSERT INTO contact(name,email,message) VALUES ('$namee','$mails','$messages')";   
	        if(mysqli_query($con, $sql))
			{
				 echo "<script>
             window.location.href='contactus.php';
             alert('Successfully delivered');
        	</script>";	
			} 
			else
			{
		   		echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
			}
	 			
 	}
?>