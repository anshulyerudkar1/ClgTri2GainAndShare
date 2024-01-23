<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from 2code.info/demo/html/ask-me-html/ask_question.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Dec 2020 04:47:17 GMT -->
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
<?php include 'header.php';?>

<div class="breadcrumbs">
		<section class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Ask Question</h1>
				</div>
				<div class="col-md-12">
					<div class="crumbs">
						<a href="#">Home</a>
						<span class="crumbs-span">/</span>
						<a href="#">Pages</a>
						<span class="crumbs-span">/</span>
						<span class="current">Ask Question</span>
					</div>
				</div>
			</div><!-- End row -->
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->
	
	<section class="container main-content">
		<div class="row">
			<div class="col-md-9">
				
				<div class="page-content ask-question">
					<div class="boxedtitle page-title"><h2>Ask Question</h2></div>
					
					<p>Ask your questions here!</p>
					
					<div class="form-style form-style-3" id="question-submit">
						<form method="post" action="ask.php">
							<div class="form-inputs clearfix">
								<p>
									<label class="required">Question <span>*</span></label>
									<textarea id="question-details" aria-required="true" cols="58" rows="8" name="ques" required></textarea>
									<span class="form-description">Please choose  appropriate words for the question to get answer's easily .</span>
								</p>
								
								<p>
									<label class="required">Category<span>*</span></label>
									<span class="styled-select">
										<!-- <select>
											<option value="">Select a Category</option>
											
											<option value="2">--Others--</option>

										</select> -->
								<?php
							$con = mysqli_connect("localhost", "root", "", "gain&share");
							$sql = "SELECT catname FROM category";
							$result = mysqli_query($con,$sql);

							echo "<select name='cname' class='form-control' id='input-21' required>";
							while ($row = mysqli_fetch_array($result)) {
							    echo "<option value='" . $row['catname'] ."'>" . $row['catname'] ."</option>";
							}
							echo "</select>";
						?>
									</span>
									<span class="form-description">Please choose the appropriate section so easily search for your question .</span>
								</p>
								
								<label>Attachment</label>
								<div class="fileinputs">
									<input type="file" class="file" name="upfile">
									<div class="fakefile">
										<button type="button" class="button small margin_0">Select file</button>
										<span><i class="icon-arrow-up"></i>Browse</span>
									</div>
								</div>
								
							</div>
							<p class="form-submit">
								<input type="submit" id="publish-question" value="Publish Your Question" class="button color small submit" name="b1">
							</p>
						</form>
					</div>
				</div><!-- End page-content -->
			</div><!-- End main -->

<?php include 'sidepanel.php';?>
<br><br>

<?php include 'footer.php';?>
</body>
</html>