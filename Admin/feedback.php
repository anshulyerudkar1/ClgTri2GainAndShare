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
            <div class="card-header"><i class="fa fa-table"></i>Feedback</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>USER NAME</th>
                    <th>EMAIL ID</th>
                    <th>Feedback</th>
                </tr>
            </thead>
            <?php
                include 'dbcon.php';  
                $sqlQuery = "SELECT * FROM contact";
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
                            echo $result['conid'];
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
                            echo $result['message'];
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