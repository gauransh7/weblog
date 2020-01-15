<footer>
<div class="container">
			<div class="row">
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">
					<h3>About US</h3>
					<p>Weblog is a platfrom for people to blog their best and to explore some excellent blog at the same time .</p>
					<div class="read">
						<a href="../personal/index.html" class="btn btn-primary read-m">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">

					<div class="tech-btm">
						<h3>Latest Posts</h3>
                                                <?php 
                                                        $query = "SELECT * FROM `blog` ORDER BY created desc LIMIT 3";
                                                        $go_data = mysqli_query($conn, $query);
                                                        while ($row = mysqli_fetch_array($go_data)){
                                                            $thumbnail = $row['thumbnail'];
                                                            $content = $row['content']; 
                                                            $date = $row['created'];
                                                            $sid = $row['blog_id'];
                                                        
                                                        ?>
							<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="single.php?id=<?php echo $sid;?>">
										<img src="./blog_img/<?php echo $thumbnail;?>" class="img-fluid" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">

									<h5>
										<a href="single.php?id=<?php echo $sid;?>"><?php echo substr($content, 0, 20).'... <a href="singlef.php?id='.$sid.'">Read More</a>';?> </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i><?php echo $date;?></span>
									</div>
								</div>

							</div>
                                                        <?php } ?>
                                            </div>
				</div>
				<!-- subscribe -->
				<div class="col-lg-4 subscribe-main footer-grid-agileits-w3ls">
					<h2>Signup to our newsletter</h2>
					<div class="subscribe-main">
							<div class="subscribe-form">
									<form action="#" method="post" class="subscribe_form">
										<input class="form-control" type="email" placeholder="Enter your email..." required="">
										<button type="submit" class="btn btn-primary submit">Submit</button>
									</form>
									<div class="clearfix"> </div>
						   </div>
						<p>We respect your privacy.No spam ever!</p>
					</div>
					<!-- //subscribe -->
				</div>
			</div>
			<!-- footer -->
			<div class="footer-cpy text-center">
				<div class="footer-social">
					<div class="copyrighttop">
						<ul>
							<li class="mx-3">
								<a class="facebook" href="https://www.facebook.com/gauransh.dhoni7">
									<i class="fab fa-facebook-f"></i>
									<span>Facebook</span>
								</a>
							</li>
							<li>
								<a class="facebook" href="https://www.instagram.com/gauransh_dingwani/">
									<i class="fab fa-instagram"></i>
									<span>Instagram</span>
								</a>
							</li>
							<li class="mx-3">
								<a class="facebook" href="https://www.linkedin.com/in/gauransh-dingwani-1a9431199/">
									<i class="fab fa-linkedin"></i>
									<span>Linkedin</span>
								</a>
							</li>
						</ul>

					</div>
				</div>
				<div class="w3layouts-agile-copyrightbottom">
					<p>© 2019 Weblog. All Rights Reserved | Design by
						<a href="../personal/index.html">gauransh dingwani</a>
					</p>

				</div>
			</div>

			<!-- //footer -->
		</div>
</footer>
  <!---->
	


