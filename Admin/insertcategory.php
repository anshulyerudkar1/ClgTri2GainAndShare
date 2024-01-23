<?php
include 'dbcon.php';
?> 
 <?php
 		if (array_key_exists('b1', $_POST))
 	    {
 	    	$name=$_POST['cname'];
	  		$descc=$_POST['cdesc'];
	  		$status=$_POST['r1'];
	    	$filename = $_FILES["cimg"]["name"]; 
	    	$tempname = $_FILES["cimg"]["tmp_name"];     
	        $folder = "image/".$filename; 
	        $con = mysqli_connect("localhost", "root", "", "gain&share");
	        $sql = "INSERT INTO category (catname,catimage,catdesc,isactive) VALUES ('$name','$filename','$descc','$status')";  
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
             window.location.href='category.php';
             alert('Data inserted');
        	</script>";
				
			} 
			else
			{
		   		echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
			}
	 			
	 	}
	 	if (array_key_exists('b2', $_POST))
	 	{
	 		$name=$_POST['cname'];
	  		$descc=$_POST['cdesc'];
	  		$status=$_POST['r1'];
	  		$sql = "update category SET 
	  		catdesc='$descc',
	  		isactive='$status' 
	  		where catname='$name'
	  		"; 
	  		if(mysqli_query($con, $sql))
	  		{
	  			 echo "<script>
             window.location.href='category.php';
             alert('Data Updated');
        	</script>";
	  			
	  		} 
	  		else
	  		{
	  			echo "Cannot update your data";
	  		}
	 	}

	 	if (array_key_exists('b3', $_POST))
	 	{
	 		$name=$_POST['cname'];
	 		$sql = "DELETE FROM category  where catname='$name' ";  
	 		 if(mysqli_query($con, $sql))
			{
				 echo "<script>
             window.location.href='category.php';
             alert('Data deleted');
        	</script>";
				
			} 
			else
			{
		   		echo "ERROR: Could not Delete the data $sql. " . mysqli_error($con);
			}

	 	}
  		
  		   
?> 