<?php 
include './include/db.php';
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
 
    <?php include './include/head.php';
    ?>
    
</head>

<body>
	<!--Header-->

	<header>
		<?php include './include/header.php';?>
	</header>
	<!--//header-->

	<!--/banner-->
	<div class="banner">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
                            <?php 
                            $query = "select * from blog";  
                            $select_data = mysqli_query($conn, $query);                          
                            $count = 0;
                            while ($row = mysqli_fetch_array($select_data)){
                                $count++;
                                $blog_id =$row['blog_id'];
                                $thumbnail = $row['thumbnail'];
                                $blog_title = $row['blog_title'];
                                $blog_subtitle = $row['blog_subtitle'];
                            if($count==1){
                                
                                ?>
                            <div class="carousel-item active" style="background-image: url('./blog_img/<?php echo $thumbnail;?>'); background-repeat:no-repeat;">
					<div class="carousel-caption">
                                            <h3><?php echo $blog_title;?>
                                                <span><h4><?php echo $blog_subtitle;?></h4></span>
						</h3>
						<div class="read">
							<a href="single.php?id=<?php echo $blog_id;?>" class="btn btn-primary read-m">Read More</a>
						</div>
					</div>
				</div>
                            <?php
                            }
                            else
                            {
                            ?>
                            <div class="carousel-item item<?php echo $count;?>" style="background-image: url('./blog_img/<?php echo $thumbnail;?>'); background-repeat:no-repeat;">
					<div class="carousel-caption">
                                            <h3><?php echo $blog_title;?>
                                                <span><h4><?php echo $blog_subtitle;?></h4></span>
						</h3>
						<div class="read">
							<a href="single.php?id=<?php echo $blog_id;?>" class="btn btn-primary read-m">Read More</a>
						</div>
					</div>
				</div>
                            <?php
                            }
                            }
                            ?>
                            
<!--				<div class="carousel-item item2">
					<div class="carousel-caption">
						<h3>Engaging Purposeful
							<span>and Creative</span>
						</h3>
						<div class="read">
							<a href="single.html" class="btn btn-primary read-m">Read More</a>
						</div>
					</div>
				</div>
				<div class="carousel-item item3">
					<div class="carousel-caption">
						<h3>Create the lifestyle
							<span>you desire</span>
						</h3>
						<div class="read">
							<a href="single.html" class="btn btn-primary read-m">Read More</a>
						</div>
					</div>
				</div>
				<div class="carousel-item item4">
					<div class="carousel-caption">
						<h3>Engaging Purposeful
							<span>and Creative</span>
						</h3>
						<div class="read">
							<a href="single.php" class="btn btn-primary read-m">Read More</a>
						</div>
					</div>
				</div>-->
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!--/model-->
	<!--//banner-->
<!--	<section class="bottom-slider">
		<div class="course_demo1">
			<ul id="flexiselDemo1">
                            <?php
                            $query1="SELECT blog.blog_title , blog.blog_subtitle , blog.thumbnail , blog.content , blog.created , user_details.name , user_details.name , category.cate_name , category.cate_id , blog.blog_id  FROM user_details , category , blog WHERE user_details.user_id = blog.user_id && category.cate_id = blog.cate_id ORDER BY blog.blog_id ";
         //  $select_data= mysqli_query($conn, $query);
           $select_data1= mysqli_query($conn, $query1);
           $count =0;
            while ($row = mysqli_fetch_array($select_data1)) {
                //$row1 = mysql_fetch_array($select_data1);
                $count++;
               $blog_title = $row['blog_title'];
               $cate_name = $row['cate_name'];
               $blog_subtitle = $row['blog_subtitle'];
               $thumbnail = $row['thumbnail'];
               $content = $row['content'];
               $user_created = $row['created'];
               $user = $row['name'];
               $created = $row['created'];
                            ?>
				<li>
					<div class="blog-item">
                                            <a href="single.php?id=<?php echo $row['blog_id']?>"><img src="blog_img/<?php echo $thumbnail;?>"  alt="<?php echo 'sorry';?>" class="img-fluid" /></a>
                                                        <div class="floods-text">
							<h3><?php echo $cate_name; ?>
								<span><?php echo $blog_title?>
									<label>|</label>
									<i><?php echo $user?></i>
								</span>
							</h3>

						</div>
					</div>
				</li>
                                <?php 
            }
                                ?>
				<li>
					<div class="blog-item">
						<img src="images/2.jpg" alt=" " class="img-fluid" />
						<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
							<i class="fas fa-play"></i>
						</button>

						<div class="floods-text">
							<h3>The fastest insect in the world
								<span>Blogger
									<label>|</label>
									<i>Adom Smith</i>
								</span>
							</h3>

						</div>
					</div>
				</li>
				<li>
					<div class="blog-item">
						<img src="images/3.jpg" alt=" " class="img-fluid" />
						<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
							<i class="fas fa-play"></i>
						</button>


						<div class="floods-text">
							<h3>Billionaires versus Millionaires
								<span>Blogger
									<label>|</label>
									<i>Adom Smith</i>
								</span>
							</h3>

						</div>
					</div>
				</li>
				<li>
					<div class="blog-item">
						<img src="images/4.jpg" alt=" " class="img-fluid" />
						<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
							<i class="fas fa-play"></i>
						</button>


						<div class="floods-text">
							<h3>Billionaires versus Millionaires
								<span>Blogger
									<label>|</label>
									<i>Adom Smith</i>
								</span>
							</h3>

						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-21by9">
							<iframe src="https://player.vimeo.com/video/145787219"></iframe>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>-->
	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<div class="row">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
                                    
                                   <?php
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   if(isset($_GET['Search'])){
    $search = $_GET['Search'];
    $query1 = "SELECT blog.blog_title , blog.blog_subtitle , blog.thumbnail , blog.views ,blog.likes ,blog.comments , blog.content , blog.created , blog.status , blog.status_remark , blog.created , user_details.user_id , user_details.name , category.cate_id , category.cate_name , blog.blog_id , blog.blog_title FROM user_details , category , blog WHERE user_details.user_id = blog.user_id and category.cate_id = blog.cate_id and content LIKE '%$search%'  ORDER BY blog.blog_id limit 2";
                                   
                                   
                                   }
                                   else
                                   {
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                                   
                            $query1="SELECT blog.blog_title , blog.blog_subtitle , blog.thumbnail , blog.views ,blog.likes ,blog.comments , blog.content , blog.created , blog.status , blog.status_remark , blog.created , user_details.user_id , user_details.name , category.cate_id , category.cate_name , blog.blog_id , blog.blog_title FROM user_details , category , blog WHERE user_details.user_id = blog.user_id and category.cate_id = blog.cate_id ORDER BY blog.blog_id limit 2";
                                   }
         //  $select_data= mysqli_query($conn, $query);
           $select_data1= mysqli_query($conn, $query1);
           $count =0;
            while ($row = mysqli_fetch_array($select_data1)) {
                //$row1 = mysql_fetch_array($select_data1);
                $view = $row['views'];
            $comment = $row['comments'];
            $like = $row['likes'];
            $blog_id = $row['blog_id'];
               $blog_title = $row['blog_title'];
               $blog_subtitle = $row['blog_subtitle'];
               $thumbnail = $row['thumbnail'];
               $content = $row['content'];
               $user_created = $row['created'];
               $user = $row['name'];
               $status = $row['status'];
               $status_remark = $row['status_remark'];
               $cate = $row['cate_name'];
               $created = $row['created'];
               $view++;
           
                            ?>  
                                    
					<div class="blog-grid-top">
						<div class="b-grid-top">
							<div class="blog_info_left_grid">
								<a href="single.php?id=<?php echo $blog_id?>">
                                                                    <img src="./blog_img/<?php echo $thumbnail;?>" class="img-fluid" alt=""></a>
								
							</div>
							<div class="blog-info-middle">
								<ul>
									<li style="color: greenyellow">
										
                                                                            <i class="far fa-calendar-alt" style="color: greenyellow"></i> <?php echo $created;?>
									</li>
									<li class="mx-2" style="color: red">
										
											<i class="far fa-thumbs-up" style="color: red"></i><?php echo $like.'likes'?>
									</li>
									<li style="color: blue">
										
											<i class="far fa-comment" style="color: blue"></i><?php echo $comment.'comments'?>
									</li>
                                                                        <li style="color: blue">
										
											<i class="far fa-comment" style="color: blue"></i><?php echo $view.'views'?>
									</li>
									
								</ul>
							</div>
						</div>

						<h3>
							<?php echo $blog_title;?>
						</h3>
                                           <i class="fas fa-thumbs-up"><?php ;?></i>
                                            <p><?php echo substr($content, 0, 100).'... <a href="singlef.php?id='.$blog_id.'">Read More</a>';?></p>
						<a href="singlef.php?id=<?php echo $blog_id?>" class="btn btn-primary read-m">Read More</a>
					</div>
					<!--//silder-->
				<?php 
            }
                                ?>
					<!--//sider -->
<!--                                        <div class="blog-grid-top">
						<div class="b-grid-top">
							<div class="blog_info_left_grid">
								<a href="single.html">
									<img src="images/b1.jpg" class="img-fluid" alt="">
								</a>
							</div>
							<div class=" col-lg-8 blog-info-middle">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> FEB 15,2018</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-thumbs-up"></i> 201 Likes</a>
									</li>
									<li>
										<a href="#">
											<i class="far fa-comment"></i> 15 Comments</a>
									</li>
									
								</ul>
							</div>
						</div>

						<h3>
							<a href="single.html">Amet consectetur adipisicing </a>
						</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
							aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis
							aute irudre dolor in elit sed uta labore dolore reprehender</p>
						<a href="single.html" class="btn btn-primary read-m">Read More</a>
					</div>-->
                                        
						<!--//silder-->
						
	
					</div>
					<!--//left-->
					<!--right-->
				
					<!--//right-->
				
			
                                        
                                
				<!--//left-->
				<!--right-->
				<?php include './include/mainright.php';?>
				<!--//right-->
			
                         </div>

                </div>
	</section>
	<!--//main-->
	<!--/middle-->
	
	<!--//middle-->
	<!---->
	
		<!--//main-->
	<!--footer-->
	<footer>
		<?php include './include/footer.php';?>
	</footer>
	<!---->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!-- desoslide-JavaScript -->
	<script src="js/jquery.desoslide.js"></script>
	<script>
		$('#demo1_thumbs').desoSlide({
			main: {
				container: '#demo1_main_image',
				cssClass: 'img-responsive'
			},
			effect: 'sideFade',
			caption: true
		});
	</script>

	<!-- requried-jsfiles-for owl -->
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});

		});
	</script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo2").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});

		});
	</script>
	<script src="js/jquery.flexisel.js"></script>
	<!-- //password-script -->
	<!--/ start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!--// end-smoth-scrolling -->

	<script>
		$(document).ready(function () {
			
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

	<!-- //Custom-JavaScript-File-Links -->
	<script src="js/bootstrap.js"></script>


</body>

</html>