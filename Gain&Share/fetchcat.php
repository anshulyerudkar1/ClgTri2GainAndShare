<section class="container main-content">
	<div class="row">
	    <div class="col-md-9">
            <div class="tab-inner-warp">
			<?php
				$connect = mysqli_connect("localhost", "root", "", "gain&share");

				if(isset($_POST["query"]))
				{
					$search = mysqli_real_escape_string($connect, $_POST["query"]);
					$query = "
					SELECT ques.qname, ans.adate,ans.atime,ans.ansq,ques.category FROM ques INNER JOIN ans ON ques.qid=ans.qid WHERE ques.category LIKE '%".$search."%' ";
				}
				else
				{
					$query = "
					SELECT ques.qname, ans.adate,ans.atime,ans.ansq FROM ques INNER JOIN ans ON ques.qid=ans.qid WHERE ques.qid=ans.qid";
				}
				$result = mysqli_query($connect, $query);
				while($row = mysqli_fetch_array($result))
				{
			?>
			<div class="tab-inner">
				<article class="question question-type-normal">
					<h2>
						<a >
							<?php
				                echo $row['qname'];
				            ?>
							</a>
							</h2>
								<div class="question-inner">
									<div class="clearfix"></div>
									<p class="question-desc">
										<?php
				                                echo $row['ansq']; 
				                        ?>
									</p>
									<div class="question-details">
										<span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>
										<span class="question-favorite"><i class="icon-star"></i>4</span>
									</div>
									<!-- <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span> -->
									<span class="question-date"><i class="icon-time"></i>Posted on:
                                        <?php
				                                echo $row['adate']; 
				                                ?>
				                                &nbsp;
				                                <?php
				                                echo $row['atime'];
				                        ?>
									</span>
									<span class="question-comment"><a href="#"><i class="icon-comment"></i>1 Answer</a></span>
									<span class="question-view"><i class="icon-user"></i>70 views</span>
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
	</div>
	<?php include 'sidepanel.php'; ?>
	<br><br>
</div>
</section>