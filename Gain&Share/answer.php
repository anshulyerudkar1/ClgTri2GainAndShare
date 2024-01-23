<?php
include 'dbcon.php';
?> 


 <?php
if(isset($_REQUEST['answer']))
	session_start();				{
 		// if (array_key_exists('answer', $_POST))
 	 //    {	
 	    	/*$sqlquery="SELECT qid from ques where qid = '".qid."'";
 	    	$id=(int)$result['qid'];*/	 
 	    	$idd=$_SESSION['uid'];   
 	    	$id=$_POST['idd'];   	 	    		
 	    	$ans=$_POST['uans'];
	        $current_date = date("Y-m-d H:i:s");
	        $sql = "INSERT INTO ans(qid,uid,adate,atime,ansq) VALUES ('$id','$idd','$current_date',now(),'$ans')"; 
	        if(mysqli_query($con, $sql))
			{
				//$sql1 = "UPDATE ques SET qstatus = (qstatus+1) WHERE qid = '$idd'";
			mysqli_query($con,"UPDATE ques SET qstatus = qstatus + 1 WHERE qid = '".$id."'");
			 echo "<script>
             window.location.href='uhome.php';
             alert('Answered');
        	</script>";
				
			} 
			else
			{
		   		echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
			}
	 			
	 	}
	 	  		
  		   
?> 