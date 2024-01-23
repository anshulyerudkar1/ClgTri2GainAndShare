
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Gain&Share</title>
	<meta name="description" content="Gain&Share Responsive Questions and Answers platform">
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
	<!-- <script src="https://kit.fontawesome.com/20315d3bff.js" crossorigin="anonymous"></script> -->
	<script type="text/javascript">
		// function show()
		// {
		// 	var pw=document.getElementById('p1');
		// 	if (pw.type=="text") 
		// 	{
		// 		pw.type=="password";
		// 	}
		// 	else
		// 		pw.type="text";
		// }
		// function show1()
		// {
		// 	var pw=document.getElementById('p2');
		// 	if (pw.type=="text") 
		// 	{
		// 		pw.type=="password";
		// 	}
		// 	else
		// 		pw.type="text";
		// }
	</script>
	
  
</head>

<body>
	<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">
	
	<div class="login-panel">
		<section class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="page-content">
						<h2>Login</h2>
						<div class="form-style form-style-3">
							<form action="login.php" method="post">
								<div class="form-inputs clearfix">
									<p class="login-text">
										<input type="text" value="Username" onfocus="if (this.value == 'Username') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Username';}" name="user">
										<i class="icon-user"></i>
									</p>
									<p class="login-password">
										<input type="password" value="Password" onfocus="if (this.value == 'Password') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Password';}" name="pass">
										<i class="icon-lock"></i>
										<a href="#">Forget</a>
									</p>
								</div>
								<p class="form-submit login-submit">
									<input type="submit" value="Log in" class="button color small login-submit submit" name="submit">
								</p>
								
							</form>
						</div>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
				<div class="col-md-6">
					<div class="page-content Register">
						<h2>Register Now</h2>
						<p>Gain & Share is platform to develop an independent and world-wide social network. Every person can use it online without a fee. People from different regions of the world can connect to it and exchange information with other people.</p>
						<a class="button color small signup">Create an account</a>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
			</div>
		</section>
	</div><!-- End login-panel -->
	
	<div class="panel-pop" id="signup">
		<h2>Register Now<i class="icon-remove"></i></h2>
		<div class="form-style form-style-3">
			<form action="signup.php" method="post" >
				<!--  -->
				<div class="form-inputs clearfix">
					<p>
						<label class="required">Username<span>*</span></label>
						<input type="text" name="uname">
					</p>
					<p>
						<label class="required">E-Mail<span>*</span></label>
						<input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
					</p>
					<p>
						<label class="required">Password<span>*</span></label>
						<input type="password" name="pass" id="p1"><!-- <button onclick="show()"><i class="fas fa-eye" ></i></button> -->
					</p>
					<p>
						<label class="required">Confirm Password<span>*</span></label>
						<input type="password" name="cpass" id="p2"><!-- <button onclick="show1()"><i class="fas fa-eye" ></i></button> -->
					</p>
				</div>
				<p class="form-submit">
					<input type="submit" value="Signup" class="button color small submit">
				</p>
			</form>
		</div>
	</div><!-- End signup -->
	
	<div class="panel-pop" id="lost-password">
		<h2>Forgot Password<i class="icon-remove"></i></h2>
		<div class="form-style form-style-3">
			<p>Forgot your password? Please enter your  email address. You will receive a link to create a new password via email.</p>
			<form action="forgotpassword.php" method="POST">
				<div class="form-inputs clearfix">
					
					<p>
						<label class="required">E-Mail<span>*</span></label>
						<input type="email" name="email">
					</p>
				</div>
				<p class="form-submit">
					<input type="submit" value="Reset" class="button color small submit" name="update">
				</p>
			</form>
			<div class="clearfix"></div>
		</div>
	</div><!-- End lost-password -->
	
	<div id="header-top">
		<section class="container clearfix">
			<nav class="header-top-nav">
				<ul>
					<li><a href="contactus.php"><i class="icon-envelope"></i>Contact</a></li>
					<li><a href="#"><i class="icon-headphones"></i>Support</a></li>
					<li><a href="login.html" id="login-panel"><i class="icon-user"></i>Login Area</a></li>
				</ul>
			</nav>
			
		</section><!-- End container -->
	</div><!-- End header-top -->
	
	<header id="header" >
		<section class="container clearfix">
			<div class="logo"><a href="index.html"><img alt="" src="images/logo2.png" style=" height="200px"; width="250px"; "></a></div>
			<nav class="navigation">
				<ul>
					<li class="current_page_item"><a href="home.php">Home</a>
						
					</li>
					<li><a href="#">Questions</a>
						<ul>
							<li><a href="bcategory.php">Questions Category</a></li>
						</ul>
					</li>
					<li><a href="bsearch.php">Search</a></li>
					
			</nav>
		</section><!-- End container -->
	</header><!-- End header -->

<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="js/jquery.easing.1.3.min.js"></script>
<script src="js/html5.js"></script>
<script src="js/twitter/jquery.tweet.js"></script>
<script src="js/jflickrfeed.min.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/jquery.tipsy.js"></script>
<script src="js/tabs.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/tags.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/custom.js"></script>
<!-- End js -->
</body>


</html>