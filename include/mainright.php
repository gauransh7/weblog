<aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
					<div class="col-lg-12 right-blog-info text-left">
						<div class="tech-btm">
							<img src="images/banner1.jpg" class="img-fluid" alt="">
						</div>
						<div class="tech-btm">
							<h4>Sign up to our newsletter</h4>
							<p>Get a chance to be in our team.</p>
							<form action="index.php" method="post">
								<input type="email" placeholder="Email" required="">
								<input type="submit" value="Subscribe">
							</form>

						</div>
						<div class="tech-btm widget_social">
							<h4>Stay Connect</h4>
							<ul>

								<li>
									<a class="twitter" href="https://www.linkedin.com/in/gauransh-dingwani-1a9431199/">
										<i class="fab fa-linkedin-in"></i>
										<span class="count"></span> Linkedin</a>
								</li>
								<li>
									<a class="facebook" href="https://www.facebook.com/gauransh.dhoni7">
										<i class="fab fa-facebook-f"></i>
										<span class="count"></span> Facebook</a>
								</li>
								<li>
									<a class="dribble" href="https://www.instagram.com/gauransh_dingwani/">
										<i class="fab fa-instagram"></i>

										<span class="count"></span> Instagram </a>
								</li>
								
                                                                
                                                                
                                                                
                                                                
                                                                
<!--                                                                
                                                                <li>
									<a href="https://www.instagram.com/gauransh_dingwani/" class="dribble3 mx-2">
								<i class="fab fa-instagram"></i>
										 Instagram </a>
								</li>
								<li>
									<a class="" href="https://www.facebook.com/gauransh.dhoni7">
										<i class="fab fa-facebook-f"></i>
										Facebook </a>
								</li>
								<li>
									<a href="https://www.linkedin.com/in/gauransh-dingwani-1a9431199/" class="dribble">
								<i class="fab fa-linkedin-in"></i>
                                                                    Linkedin</a>
								</li>-->

							</ul>
						</div>
						<div class="single-gd my-5 tech-btm">
							<h4>Our Progress</h4>
							<div class="progress">
								<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0"
								    aria-valuemax="100"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
								    aria-valuemax="100"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
								    aria-valuemax="100"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
								    aria-valuemax="100"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
								    aria-valuemax="100"></div>
							</div>
						</div>
						<div class="tech-btm">
							<h4>Recent Posts</h4>
                                                        <?php 
                                                        $query = "SELECT * FROM `blog` ORDER BY created desc LIMIT 5";
                                                        $go_data = mysqli_query($conn, $query);
                                                        while ($row = mysqli_fetch_array($go_data)){
                                                            $thumbnail = $row['thumbnail'];
                                                            $content = $row['content']; 
                                                            $date = $row['created'];
                                                            $sid = $row['blog_id'];
                                                        
                                                        ?>
							<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="singlef.php?id=<?php echo $sid;?>">
										<img src="./blog_img/<?php echo $thumbnail;?>" class="img-fluid" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">

									<h5>
										<a href="singlef.php?id='.$sid.'"><?php echo substr($content, 0, 20).'... <a href="singlef.php?id='.$sid.'">Read More</a>';?> </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i><?php echo $date;?></span>
									</div>
								</div>

							</div>
                                                        <?php } ?>
<!--							<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="single.html">
										<img src="images/7.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">

									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Jan, 2018</span>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="single.html">
										<img src="images/6.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">

									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Jan, 2018</span>
									</div>
								</div>

							</div>
							<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="single.html">
										<img src="images/8.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">
									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Feb, 2018</span>
									</div>
								</div>

							</div>-->
						</div>
					</div>

				</aside>
				<!--//right-->
			