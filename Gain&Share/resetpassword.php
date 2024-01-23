<?php
/*session_start();*/
error_reporting(0);
include('dbcon2.php');
/*if(strlen($_SESSION['login'])==0)
  { 
header('location:uhome.php');
}
else{*/
if(isset($_POST['reset']))
  {



$emailreset=$_POST['emailreset'];
$password=$_POST['password'];
$newpassword=$_POST['newpassword'];


/*$email=$_SESSION['login'];*/

  $sql ="SELECT password FROM usermstr WHERE email=:emailreset and password=:password";
$query= $conn -> prepare($sql);
$query-> bindParam(':emailreset', $emailreset, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);

if($query -> rowCount() > 0)
{
$connd="update usermstr set password=:newpassword where email=:emailreset";
$chngpwd1 = $conn->prepare($connd);
$chngpwd1-> bindParam(':emailreset', $emailreset, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();

echo "<script>alert('sucesssssd');</script>";
header('location:uhome.php');
}
}
?>



<!DOCTYPE html>
<head>

  <!-- Basic Page Needs -->
  <meta charset="utf-8">
  <title>Gain & Share</title>
  <meta name="description" content="Ask me Responsive Questions and Answers Template">
  <meta name="author" content="2code.info">
  
  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Main Style -->
  <link rel="stylesheet" href="style.css">
  
  <!-- Skins -->
  <link rel="stylesheet" href="css/skins/skins.css">
  
  <!-- Responsive Style -->
  <link rel="stylesheet" href="css/responsive.css">
  
  <!-- Favicons -->
  <link rel="shortcut icon" href="images/favicon.png">
  
</head>
<body>

<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">
  
  <?php include 'header.php';?>
  
  <div class="breadcrumbs">
    <section class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Reset Password</h1>
        </div>
        <div class="col-md-12">
          <div class="crumbs">
            <a href="#">Home</a>
            <span class="crumbs-span">/</span>
            <a href="#">user</a>
            <span class="crumbs-span">/</span>
            <span class="current">Reset Password</span>
          </div>
        </div>
      </div><!-- End row -->
    </section><!-- End container -->
  </div><!-- End breadcrumbs -->
  
  <section class="container main-content">
    <div class="row">
      <div class="col-md-9">
        <div class="page-content">
          <div class="boxedtitle page-title"><h2>Reset Password</h2></div>
          
          <div class="form-style form-style-4">
            <form name="chngpwd" method="post" >
              <div class="form-inputs clearfix">
                <p>
            
            <label class="required">Registered Email ID<span>*</span></label>
            <input type="text" name="emailreset" required>
          </p>
          <p>
            <label class="required">Old password<span>*</span></label>
            <input type="password" name="password" required>
          </p>
          <p>
            <label class="required">New Password<span>*</span></label>
            <input type="password" name="newpassword" required>
          </p>
          <p>
            <label class="required">Confirm New Password<span>*</span></label>
            <input type="password" name="cpass" required>
          </p>
              </div>
              <p class="form-submit">
                <input type="submit" value="Reset Password" name="reset" class="button color small login-submit submit">
              </p>
            </form>
          </div>
        </div><!-- End page-content -->
      </div><!-- End main -->
      
    </div><!-- End row -->
  </section><!-- End container -->
  <br>
  <br>
  <?php include 'footer.php';?>
</div><!-- End wrap -->

</body>
</html>