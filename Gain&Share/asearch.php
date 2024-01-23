<!DOCTYPE html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
        <title>Gain & Share</title>
        <meta name="description" content="Ask me Responsive Questions and Answers Template">
        <meta name="author" content="2code.info">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
		
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
	</head>
	
	<body>
		<div id="wrap" class="grid_1200">
		<?php include 'header.php';?>
		<div class="section-warp ask-me"><h2 align="center">Search your queries</h2><br></div>
		<div class="container">
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Ask any question and you be sure find your answer ?" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<br />

		<?php
            include 'footer.php';
        ?>
        </div>

	</body>
</html>


<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>




