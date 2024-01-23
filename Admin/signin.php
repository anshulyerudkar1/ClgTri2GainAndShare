<?php
session_start();
 ?>
<html lang="en">
<head>
 <!--  <script language="javascript" type="text/javascript">
    function preback() {
      window.history.forward();
    }
    setTimeout("preback()",0);
    window.onunload =function() {null};
    
  </script> -->
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Gain & Share</title>
  <style type="text/css">
  	#usericon{
  		top: 38%;
  		left: 55%;
  		position: absolute;
  	}
  	#lockicon{
  		top: 40%;
  		left: 55%;
  		position: absolute;
  	}
    /*input[type=text]:pattern {
      border: red solid 1px;
    }*/
    input[type=text]:focus {
      border: lightblue solid 2px;
      transition: ease-in-out, width .35s ease-in-out;
    }
    /*input[type=password]:pattern {
      border: red solid 1px;
    }*/
    input[type=password]:focus {
      border: lightblue solid 2px;
      transition: ease-in-out, width .35s ease-in-out;
    }
  	
  </style>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('admin.jpg');background-size:cover;
background-position:center;">
<!-- Start wrapper-->
 <div id="wrapper">
 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="assets/images/logo3.png" alt="logo icon" height="60px" width="200px">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Sign In</div>
		    <form action="adminsignin.php" method="post">
			  <div class="form-group">
			  <label for="exampleInputUsername" class="sr-only">Username</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="InputUsername" class="form-control input-shadow" placeholder="Admin name" name="t1" required maxlength="30">
				  <div class="form-control-position">
					  <i class="icon-user" id="usericon"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputPassword" class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" id="InputPassword" class="form-control input-shadow" placeholder="Enter Password" name="t2" required maxlength="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">

				  <div class="form-control-position">
					  <i class="icon-lock" id="lockicon"></i>
				  </div>
			   </div>
			  </div>
			<div class="form-row">
			 <div class="form-group col-6">
			 </div>
			</div>
			 <!-- <button type="button" class="btn btn-primary btn-block" name="b1">Sign In</button>	 -->	
			 <input type="submit" value="Sign In" class="btn btn-primary btn-block"> 
			 </form>
		   </div>
		  </div>
		 
	     </div>
     <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
    <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  </div>
</body>
</html>