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
</head>
<body>
<?php include 'header1.php';
include 'dbcon.php';
?>
	<div class="section-warp ask-me">
		<div class="container clearfix">
			<div class="box_icon box_warp box_no_border box_no_background" box_border="transparent" box_background="transparent" box_color="#FFF">
				<div class="row">
					<div class="col-md-12">
						<marquee><h2>Welcome to Gain &Share, Awesome Questions & Answer </h2></marquee>
						
						<div class="clearfix"></div>
						<a class="color button dark_button medium" href="contactus.php" >About Us</a>
						<a class="color button dark_button medium" href="#" >Join Now</a>
						<div class="clearfix"></div>
						<br>
					</div>
				</div><!-- End row -->
			</div><!-- End box_icon -->
		</div><!-- End container -->
	</div><!-- End section-warp -->

	
	<section class="container main-content">
		<div class="row">
			<div class="col-md-9">
				
				<div class="tabs-warp question-tab">
		            <ul class="tabs">
		                <li class="tab"><a href="#" class="current">Questions Answers</a></li>
		                <li class="tab"><a href="#">Most Responses</a></li>
		                <li class="tab"><a href="#">No answers</a></li>
		                <!-- <small class="tab">Most recent responses</small> -->
		            </ul>
		            <div class="tab-inner-warp">
		            	<?php
				            include 'dbcon.php';  
				            $c=0;
				            $sqlQuery = "SELECT ques.qname,ques.qid, ans.adate,ans.atime,ans.ansq,ques.qstatus FROM ques INNER JOIN ans ON ques.qid=ans.qid WHERE qstatus = 1 AND ques.qid LIMIT 8";
				            $rs = mysqli_query($con,$sqlQuery);
				            while ($result=mysqli_fetch_array($rs))
				            {
				        ?>
						<div class="tab-inner">
							<article class="question question-type-normal">
								<h2>
									<a >
										<?php
											 $id=(int)$result['qid'];
				                               echo $result['qname'];
				                        ?>
									</a>
								</h2>
								<!-- <a class="question-report" href="#">Report</a> -->
								<!-- <div class="question-type-main"><i class="icon-question-sign"></i>Question</div> -->
								<!-- <div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
								</div> -->
								<div class="question-inner">

									<div class="clearfix"></div>
									<p class="question-desc">
										<?php
												//echo $result['name']
				                                echo $result['ansq']; 
				                        ?>
									</p>
									<div class="question-details">

										<span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>
										<span class="question-favorite"><i class="icon-star"></i>4</span>
									</div>
									<!-- <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span> -->
									<span class="question-date"><i class="icon-time"></i>Posted on:
                                        <?php
				                                echo $result['adate']; 
				                                ?>
				                                &nbsp;
				                                <?php
				                                echo $result['atime'];
				                        ?>
									</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>1 Answer</a></span>
									<!-- <?php $c++;?>
									<span class="question-view"><i class="icon-user"></i>Voting
										<button style="color: #FFF;background: none;border: none;font-size: 15px;padding: 0 10px;margin: 10px 0;margin-left: 15px;cursor: pointer;" name="up" class="likebtn" id="<?php echo $c;?>"><i class="icon-thumbs-up"></i></button>
										<input style="border: none;background: none;width: 40px;font-size: 15px;pointer-events: none;" type="number" id="like<?php echo $c;?>" value="0" name=""></input>
										<button style="color: #FFF;background: none;border: none;font-size: 15px;padding: 0 10px;margin: 10px 0;margin-left: 15px;cursor: pointer;" name="down" id="dislikebtn<?php echo $c;?>"><i class="icon-thumbs-down" aria-hidden="true"></i></button>
										<input style="border: none;background: none;width: 40px;font-size: 15px;pointer-events: none;" type="number" id="dislike<?php echo $c;?>" value="0" name=""></input>
									</span> -->
									
									<div class="clearfix"></div>
                                    
								</div>
							</article>
							<br/>
		                </div>
		                <?php
						    }
						?>
						<br />
                        <!-- <div id="load_data">
                        	<button class="load-questions" name="loadq" onclick="load_question_answer_data(limit, $id+1)">LOAD MORE QUESTION</button>
                        </div>
                        <div id="load_data_message"></div><br /> -->
                        <!-- <div id="remove_row">
		                
		            </div> -->
		            <!-- <a href="" class="load-questions" id="loadmore" ><i class="icon-refresh"></i>Load More Questions</a> -->
		            </div>
		           
		             <div class="tab-inner-warp">
		            	<?php
				            include 'dbcon.php';  
				            $sqlQuery = "SELECT ques.qid,ques.qname,ques.qtime,ques.qdate,ques.qstatus FROM ques INNER JOIN ans ON ques.qid=ans.qid WHERE ques.qstatus > 1 GROUP BY ans.qid";
				            
				            
				            $rs = mysqli_query($con,$sqlQuery);
				            
				            while ($result=mysqli_fetch_array($rs))
				            {
				        ?>
						<div class="tab-inner">
							<article class="question question-type-normal">
								<h2>
									<a >
										<?php
				                               $id=(int)$result['qid'];
				                               echo $result['qname'];
				                        ?>
									</a>
								</h2>
								<!-- <a class="question-report" href="#">Report</a> -->
								<!-- <div class="question-type-main"><i class="icon-question-sign"></i>Question</div> -->
								<!-- <div class="question-author">
									<a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
								</div> -->
								<div class="question-inner">
									
									<div class="clearfix"></div>
									<div class="question-desc">
									<!-- <p> -->
										<?php
											$c=0;
										    $sqlQuery1 = "SELECT ans.ansq,ans.adate,ans.atime FROM ans WHERE ans.qid='".$id."' ORDER BY adate DESC";
										    $rs1 = mysqli_query($con,$sqlQuery1);
										    $no=1;
										    while ($result1=mysqli_fetch_array($rs1))
				                            {
				                        ?>
				                            	<p>
				                            	<?php
				                            	echo "Answer  ";
				                            	echo $no;
				                            	?><br>
				                            	<?php
				                                echo $result1['ansq'];
				                                ?>
				                                </p><b>
				                                <p align="right"><i class="icon-time"></i> Posted on:
				                                <?php
				                                echo $result1['adate'];
                                                ?>
				                                &nbsp;
				                                <?php
				                                echo $result1['atime'];
				                                ?></b></p>
				                                <?php
				                                $no++;
				                            } 
				                    
				                        ?>
									
									<!-- </p> -->
                                    </div>
                                    
									<div class="question-details">
										<span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>
										<span class="question-favorite"><i class="icon-star"></i>4</span>
									</div>
									<!-- <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span> -->
									<span class="question-date"><i class="icon-time"></i>Posted on:
                                        <?php
				                                echo $result['qdate']; 
				                                ?>
				                                &nbsp;
				                                <?php
				                                echo $result['qtime'];
                                                
				                        ?>
									</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>
										<?php
				                                echo $result['qstatus']; 
				                                ?>
									 Answer</a></span>
									<!-- <?php $c++;?>
									<span class="question-view"><i class="icon-user"></i>Voting
										<button style="color: #FFF;background: none;border: none;font-size: 15px;padding: 0 10px;margin: 10px 0;margin-left: 15px;cursor: pointer;" name="up" class="likebtn" id="<?php echo $c;?>"><i class="icon-thumbs-up"></i></button>
										<input style="border: none;background: none;width: 40px;font-size: 15px;pointer-events: none;" type="number" id="like<?php echo $c;?>" value="0" name=""></input>
										<button style="color: #FFF;background: none;border: none;font-size: 15px;padding: 0 10px;margin: 10px 0;margin-left: 15px;cursor: pointer;" name="down" id="dislikebtn<?php echo $c;?>"><i class="icon-thumbs-down" aria-hidden="true"></i></button>
										<input style="border: none;background: none;width: 40px;font-size: 15px;pointer-events: none;" type="number" id="dislike<?php echo $c;?>" value="0" name=""></input>
									</span> -->
									<div class="clearfix"></div> 
									<!-- <br><input type="textarea" name="ans"> -->
								</div>
								
							</article>
							<br/>
		                </div>
		                <?php
		                    
						    }
						?>
		                <!-- <a href="#" class="load-questions"><i class="icon-refresh"></i>Load More Questions</a> -->
		            </div>

					<div class="tab-inner-warp">
						<?php
				            include 'dbcon.php';  
				            $sqlQuery = "SELECT * FROM ques  WHERE qstatus = 0 AND qid LIMIT 6";
				            $rss = mysqli_query($con,$sqlQuery);
				            while ($result=mysqli_fetch_array($rss))
				            {
				        ?>

						<div class="tab-inner">

							<article class="question question-type-normal">	
								<h2>
									<a href="single_question.html">
										<?php

				                               echo $result['qname'];
				                        ?>
									</a>
								</h2>
								<div class="question-inner">
									
								<!-- <?php 
								if(isset($_REQUEST['answer']))
								{
								// header('Location:answer.php?id=<?php echo $result['qid']');
									        $abc=$_REQUEST['idd'];

								}
								?> -->
									<div class="clearfix"></div>
									<p class="question-desc">
										
									</p>
									<div class="question-details">
										<span class="question-answered question-answered-done" style="color: red;">unsolved</span>
										<span class="question-favorite"><i class="icon-star"></i>5</span>
									</div>
									<!-- <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span> -->
									<span class="question-date"><i class="icon-time"></i>
										<?php
				                                echo $result['qdate']; 
				                        ?>
				                        &nbsp;
				                        <?php
				                                echo $result['qtime']; 
				                        ?>
									</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>0 Answer</a></span>
									
									<div class="clearfix"></div>
								</div>
							</article>
							<br/>
					    </div>
					    <?php
						    }
						?>
						<!-- <a href="#" class="load-questions"><i class="icon-refresh"></i>Load More Questions</a> -->
					</div>
		        </div><!-- End page-content -->
			</div><!-- End main -->
			<?php include 'sidepanel.php'; ?>
		<br><br>
	<?php include 'footer.php'; ?>
	
</body>
</html>

<!-- <script type="text/javascript">
	 $(document).on('click', '.likebtn', function(){
		var id = $(this).attr("id"); 
		var lvalue = $('#like'+id+'').val();
		lvalue++;
		$('#like'+id+'').val(lvalue);
		// $('#'+id+'').disable();
		  document.getElementById(id).disabled = true; 
	});
</script>
 --><!-- <script type="text/javascript">
	let likebtn=document.querySelector('#likebtn');
	let dislikebtn=document.querySelector('#dislikebtn');
	let input1=document.querySelector('#input1');
	let input2=document.querySelector('#input2');

	likebtn.addEventListener('click',()=>{
		input1.value=parseInt(input1.value)+1;
	})

	dislikebtn.addEventListener('click',()=>{
		input2.value=parseInt(input2.value)+1;
	})
</script> -->
<!-- <script>
$(document ).ready (function (){
$(document) .on ( 'click', '#loadmore', function (event) { 
	event.preventDefault(); 
	var id = $('#loadmore'.data('id'); 
		$.ajax({ 
			url : "loaddata.php",
			type : "post",
			data : {id : id}, 
			success : function(response){ 
				$('#remove_row').remove ();
				$('#tab-inner').append(response);

			}
		});
	});
});
    
</script> -->
