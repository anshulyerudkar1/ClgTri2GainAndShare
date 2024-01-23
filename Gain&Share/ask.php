<?php
include 'dbcon.php';
?> 
 <?php
 		if (array_key_exists('b1', $_POST))
 	    {
 	    	$name=$_POST['ques'];
	  		$category=$_POST['cname'];
	    	$filename = $_FILES["cimg"]["name"]; 
	    	$tempname = $_FILES["cimg"]["tmp_name"];     
	        $folder = "image/".$filename; 
	        $current_date = date("Y-m-d H:i:s");
	        $sql = "INSERT INTO ques(qname,category,qdate,qtime,qimg) VALUES ('$name','$category','$current_date',now(),'$filename')";  
	        // Now let's move the uploaded image into the folder: image 
	        if (move_uploaded_file($tempname, $folder)) 
	        { 
	            echo "Image uploaded successfully"; 
	        }
	        else
	        { 
	            echo "Failed to upload image"; 
	        } 
	        if(mysqli_query($con, $sql))
			{
				 echo "<script>
             window.location.href='uhome.php';
             alert('Question Successfully Asked');
        	</script>";
				
			} 
			else
			{
		   		echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
			}
	 			
	 	}
	 	  		
  		   
?> 