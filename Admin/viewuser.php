<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
      <div id="wrapper">

	
<?php include 'sidepanel.php'; ?>
<div class="content-wrapper">
    <div class="container-fluid">
<div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>USER</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                <tr>
                    <th>USER ID</th>
                    <th>USER NAME</th>
                    <th>EMAIL ID</th>
                    <th>PASSWORD</th>
                </tr>
            </thead>
            <?php
                include 'dbcon.php';  
                $sqlQuery = "SELECT * FROM usermstr ";
                $rs = mysqli_query($con,$sqlQuery);
                while ($result=mysqli_fetch_array($rs))
                {
                    ?>
                    <!-- <?php
                        $_SESSION['cid']=$result['cid'];
                     ?> -->
                    <tr>
                        <td>
                            <?php
                            echo $result['uid'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $result['name'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $result['email'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo base64_encode($result['password']);
                            ?>
                        </td>
                    </tr>
                    <?php   
                }
            ?>

             </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
  </div>
</div>
</div>
</body>
</html>