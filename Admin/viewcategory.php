<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gain & Share</title>
	<style type="text/css">
		th,td{
			border: 4px double black;
			padding: 12px;
			background-color: white;
		}
		input[type=submit]
		{
			width: 110px;

		}
		#b1:hover{
			background-color: white;
			color: darkgreen;
		}
		#b1{
			background-color: darkgreen;
			color: white;
		}
		#b2:hover{
			background-color: white;
			color: red;
		}
		#b2{
			background-color: red;
			color: white;
		}

	</style>
</head>
<body bgcolor="lightblue">
<div id="wrapper">
<?php include'sidepanel.php';
include 'dbcon.php';
?>

	<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
    <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		   <!--  <h4 class="page-title"></h4> -->
		   
	   </div>
	  
     </div>
<center>
	<form action="" method="POST" enctype="multipart/form-data">
		<table >
			<thead>
				<tr>
					<th>CATEGORY ID</th>
					<th>CATEGORY NAME</th>
					<th>IMAGE</th>
					<th>CATEGORY DESCRIPTION</th>
					<th>CATEGORY STATUS</th>
					
				</tr>
			</thead>
			<?php

				include 'dbcon.php';  
				$sqlQuery = "SELECT * FROM category ";
				$rs = mysqli_query($con,$sqlQuery);
				while ($result=mysqli_fetch_array($rs))
				{
					?>
					<?php
						$_SESSION['cid']=$result['cid'];
					 ?>
					<tr>
						<td>
							<?php
							echo $result['cid'];
							?>
						</td>
						<td>
							<?php
							echo $result['catname'];
							?>
						</td>
						<td>
							<?php
									echo '<img  src="image/'.$result['catimage'].'" alt="Feature-img" height="100" width="100"/> ';
							?>
							
						</td>
						<td>
							<?php
							echo $result['catdesc'];
							?>
						</td>
						<td>
							<?php
							echo $result['isactive'];
							?>
						</td>
						<!-- <td>
							
							<form method="POST">
								<a href="insertcategory.php"><input type="submit" name="active" value="EDIT" id="b1"></a>
								<br>
								
							</form>
						</td> -->
					</tr>
					<?php	
				}
			?>

		</table>
	</form>
</center>
</div></div></div>
</body>
</html>

<?php 
mysqli_close($con); 
?>