<aside class="col-md-3 sidebar">
					<div class="widget widget_stats">
					<h3 class="widget_title">Stats</h3>
					<div class="ul_list ul_list-icon-ok">
						<?php include 'dbcon.php'; ?>
						<ul>
							<li><i class="icon-question-sign"></i>Questions ( <span>
								<?php
								    include 'dbcon.php';  
				                    $sqlQuery = "SELECT count(qid) AS total FROM ques ";
				                    $rs = mysqli_query($con,$sqlQuery);
				                    $result=mysqli_fetch_assoc($rs);
				                    $num_rows=$result['total'];
				                    echo $num_rows;
				                ?>
							</span> )</li>
							<li><i class="icon-comment"></i>Answers ( <span>
								<?php
								    include 'dbcon.php';  
				                    $sqlQuery = "SELECT COUNT(aid) AS total FROM ans ";
				                    $rs = mysqli_query($con,$sqlQuery);
				                    $result=mysqli_fetch_assoc($rs);
				                    $num_rows=$result['total'];
				                    echo $num_rows;
				                ?>
							</span> )</li>
						</ul>
					</div>
				</div>
				
				<div class="widget widget_social">
					<h3 class="widget_title">Notes:</h3>
					<ul>
						<li class="rss-subscribers" style="background-color:#2B1B17 ;">
							<a href="https://www.geeksforgeeks.org/" target="_blank">
							<strong>
								<!-- <i class="icon-rss"></i> -->
								<span>GeeksforGeeks</span>
							</strong>
							</a>
						</li>
						<li class="rss-subscribers" style="background-color:#1569C7;">
							<a href="https://www.tutorialspoint.com/" target="_blank">
							<strong>
								<span>Tutorials Point</span>
							</strong>
							</a>
						</li>
						<li class="rss-subscribers" style="background-color:#A52A2A ;">
							<a href="https://stackoverflow.com/questions/tagged/html" target="_blank">
							<strong>
								<span>StackOverflow</span>
							</strong>
							</a>
						</li>
						<li class="rss-subscribers" style="background-color:#008000 ;">
							<a href="https://www.javatpoint.com/" target="_blank">
							<strong>
								<span>Javatpoint</span>
							</strong>
							</a>
						</li>
						<li class="rss-subscribers" style="background-color:#25383C ;">
							<a href="https://www.w3schools.com/" target="_blank">
							<strong>
								<span>W3 Schools</span>
							</strong>
							</a>
						</li>

					</ul>
				</div>
				
				
				
				<div class="widget widget_tag_cloud">
					<h3 class="widget_title">Tags</h3>
					<a href="#">Resume Building</a>
					<a href="#">Portfolio</a>
					<a href="#">Wordpress</a>
					<a href="#">Html</a>
					<a href="#">Css</a>
					<a href="#">jQuery</a>
					<a href="#">Software Installation</a>
					<a href="#">Logical & Reasoning</a>
					<a href="#">Node JS</a>
					<a href="#">Python</a>
					<a href="#">IPL</a>
					<a href="#">Sports</a>
					<a href="#">R</a>
					<a href="#">Java</a>
					<a href="#">Interviews</a>
					<a href="#">Aptitude</a>
					<a href="#">--Others--</a>
				</div>
				
				<div class="widget">
					<h3 class="widget_title">Quick Video Tutorials</h3>
					<small>Datastructures</small>
					<iframe width="226" height="200" src="https://www.youtube.com/embed/BchPukWb0CU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<br>
					<small>Coding platform for practice</small>
					<iframe width="226" height="200" src="https://www.youtube.com/embed/07QCAJYolaE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					
				</div>
				
			</aside><!-- End sidebar -->
			</div><!-- End row -->
	</section><!-- End container -->