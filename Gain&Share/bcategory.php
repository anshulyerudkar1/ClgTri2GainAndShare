<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from 2code.info/demo/html/ask-me-html/index_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Dec 2020 04:46:51 GMT -->
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
  <script src="https://kit.fontawesome.com/20315d3bff.js" crossorigin="anonymous"></script>
</head>
<body>
          <div id="wrap" class="grid_1200">
    <?php include 'header1.php';?>
    <div class="section-warp ask-me"><h2 align="center">Search the question according to subject</h2><br></div>
    <div class="container">
      <div class="form-group">
        <div class="input-group">
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
                </p>
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
      url:"fetchcat.php",
      method:"post",
      data:{query:query},
      success:function(data)
      {
        $('#result').html(data);
      }
    });
  }
  
  $('#input-21').change(function(){
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