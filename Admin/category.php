


<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	
	<script src="https://kit.fontawesome.com/20315d3bff.js" crossorigin="anonymous"></script>
	<style type="text/css">
		.btn{
			width: 85%;
			border: none;
			border-radius: 4px;
			/*position: absolute;*/
		}
	</style>
</head>
<body>
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
    <!-- End Breadcrumb-->


  
		  <div class="row">
			<div class="col-lg-12">
			   
			   <div class="card">
			     <div class="card-body">
				   <div class="card-title">Add Categories</div>
				   <hr>
				  
				    <form action="insertcategory.php" enctype="multipart/form-data" method="post" >
					 <div class="form-group row">
					  <label for="input-21" class="col-sm-2 col-form-label">Category Name</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" id="input-21" placeholder="Enter Category Name" name="cname">
					  </div>
					</div>
					
					<div class="form-group row">
					  <label for="input-21" class="col-sm-2 col-form-label">Category Image</label>
					  <div class="col-sm-10">
						<input type="file"  id="input-21" placeholder="Upload File" name="cimg">
					  </div>
					</div>

					 <div class="form-group row">
					  <label for="input-21" class="col-sm-2 col-form-label">Category Description</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" id="input-21" placeholder="Enter Category Description" name="cdesc">
					  </div>
					</div>

					 <div class="form-group row">
					  <label for="input-21" class="col-sm-2 col-form-label">Category Status</label>
					  <div class="col-sm-10">
					  	<input type="radio" name="r1" value="1"><b>Active</b>
					  	<br><br>
					  	<input type="radio" name="r1" value="0"><b>Unactive</b>
					  </div>
					</div>

					<div class="form-group row">
					  <label class="col-sm-2 col-form-label"></label>
					  <div class="col-sm-10">
						   	 <input type="submit" name="b1" value="      INSERT" class="btn btn-outline-dark waves-effect waves-light">   

					</div>
					
					</form>
				 </div>
			 </div>
    </div>
<!-- </form> -->
<hr>
 <div class="card">
			     <div class="card-body">
				   <div class="card-title">Edit Categories</div>
				   <hr>
				  
				    <form action="insertcategory.php" enctype="multipart/form-data" method="post" >
					 <div class="form-group row">
					  <label for="input-21" class="col-sm-2 col-form-label">Category Name</label>
					 
					  <div class="col-sm-10">
						<?php
							$con = mysqli_connect("localhost", "root", "", "gain&share");
							$sql = "SELECT catname FROM category";
							$result = mysqli_query($con,$sql);

							echo "<select name='cname' class='form-control' id='input-21'>";
							while ($row = mysqli_fetch_array($result)) {
							    echo "<option value='" . $row['catname'] ."'>" . $row['catname'] ."</option>";
							}
							echo "</select>";
						?>						
						
					  </div>
					</div>


					 <div class="form-group row">
					  <label for="input-21" class="col-sm-2 col-form-label">Category Description</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" id="input-21" placeholder="Enter Category Description" name="cdesc">
					  </div>
					</div>

					 <div class="form-group row">
					  <label for="input-21" class="col-sm-2 col-form-label">Category Status</label>
					  <div class="col-sm-10">
					  	<input type="radio" name="r1" value="1"><b>Active</b>
					  	<br><br>
					  	<input type="radio" name="r1" value="0"><b>Unactive</b>
					  </div>
					</div>

					<div class="form-group row">
					  <label class="col-sm-2 col-form-label"></label>
					  <div class="col-sm-10">
					  		
						     <input type="submit" name="b2" value="UPDATE" class="btn btn-outline-dark waves-effect waves-light">
					  </div>
					</form>
				 </div>
			 </div>
			</div>


<div class="card">
			     <div class="card-body">
				   <div class="card-title">Delete Categories</div>
				   <hr>
				  
				    <form action="insertcategory.php" enctype="multipart/form-data" method="post" >
					 <div class="form-group row">
					  <label for="input-21" class="col-sm-2 col-form-label">Category Name</label>
					  <div class="col-sm-10">
					  	<?php
							$con = mysqli_connect("localhost", "root", "", "gain&share");
							$sql = "SELECT catname FROM category";
							$result = mysqli_query($con,$sql);

							echo "<select name='cname' class='form-control' id='input-21'>";
							while ($row = mysqli_fetch_array($result)) {
							    echo "<option value='" . $row['catname'] ."'>" . $row['catname'] ."</option>";
							}
							echo "</select>";
						?>		
						<!-- <input type="text" class="form-control" id="input-21" placeholder="Enter Category Name" name="cname"> -->
					  </div>
					</div>
					<div class="form-group row">
					  <label class="col-sm-2 col-form-label"></label>
					  <div class="col-sm-10">
						   	 <input type="submit" name="b3" value="DELETE" class="btn btn-outline-dark waves-effect waves-light">   

					</div>
					
					</form>
				 </div>
			 </div>
    </div>
  


    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
</div>
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>


</body>
</html>