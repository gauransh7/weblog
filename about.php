<?php 
include './include/db.php';
session_start();
?>
<!--<!DOCTYPE html>
<html lang="zxx">

<head>

	<?php include './include/head.php';?>
</head>

<body>
	Header
        <header>
	<?php include './include/header.php';?>
        </header>
	//header
<?php
$query = "select * from blog where blog_id = 5";
$select_data = mysqli_query($conn, $query);
$row = mysqli_fetch_array($select_data);
$thumbnail = $row['thumbnail'];

?>
	/banner
	<div background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../blog_img/$thumbnail) no-repeat;
	background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../blog_img/$thumbnail) no-repeat;
	background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../blog_img/$thumbnail) no-repeat;
	background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../blog_img/$thumbnail) no-repeat;
	background-size: cover;
	min-height: 230px;>
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">About</li>
	</ol>
	//banner
	/main
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<h3 class="tittle">About</h3>
			<div class="row inner-sec">
				left
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<div class="blog-grid-top">

						<div class="blog_info_left_grid">
							<a href="single.html">
								<img src="images/b5.jpg" class="img-fluid" alt="">
							</a>
						</div>
						<h3>
							Amet consectetur adipisicing
						</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
							aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis
							aute irudre dolor in elit sed uta labore dolore reprehender</p>
						<a href="single.html" class="btn btn-primary read-m">Read More</a>
					</div>
					<div class="row">
						<div class="col-md-6 card mt-3">
							<img class="card-img-top" src="images/2.jpg" alt="Card-image">
							<div class="card-body">
								<h5 class="card-title">Lorem ipsum dolor </h5>
								<p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
								<a href="single.html" class="btn btn-primary read-m">Read More</a>
							</div>
						</div>
						<div class="col-md-6 card mt-3">
							<img class="card-img-top" src="images/3.jpg" alt="Card-image">
							<div class="card-body">
								<h5 class="card-title">Lorem ipsum dolor </h5>
								<p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
								<a href="single.html" class="btn btn-primary read-m">Read More</a>
							</div>
						</div>
						
					</div>
				</div>
				//left
				right
				<?php
                                include './include/mainright.php';
                                ?>
                        </div>
                </div>
        </section>
	//main

	footer
	<?php include './include/footer.php';?>
        
        
        <script src="js/jquery-2.2.3.min.js"></script>
	 //js 
	/ start-smoth-scrolling 
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
	// end-smoth-scrolling 

	<script>
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

	 //Custom-JavaScript-File-Links 
	<script src="js/bootstrap.js"></script>




</body>

</html>-->




<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>G.D.</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Anent Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //Web-Fonts -->
</head>
<header><?php include './include/header.php';?></header>
<body>
	<!-- home -->
	<div id="home">
		<!-- banner -->
		<div class="banner_w3lspvt">
			<div class="banner-top1">
				<div class="container">
					<div class="banner-text text-center">
						<h1><a href="index.html" class="logo text-wh text-uppercase font-weight-light">Gauransh</a></h1>
						<p class="text-bl text-li mt-3">Get your dreams before they leave your mind.</p>
						<div class="social-icons mt-4">
							<ul class="list-unstyled">
								<li>
									<a href="#">
										<span class="fa fa-facebook"></span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-twitter"></span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-google-plus"></span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-instagram"></span>
									</a>
								</li>
							</ul>
						</div>
						<a href="#about" class="btn button-style mt-5">Read More</a>
					</div>
				</div>
			</div>
		</div>
		<!-- //banner -->
	</div>
	<!-- //home -->

	<!-- header -->
	<header class="py-2">
		<div class="container d-flex">
			<h4 class="mt-2 let">My Profile</h4>
			<!-- menu -->
			<ul id="menu">
				<li>
					<input id="check02" type="checkbox" name="menu" />
					<label for="check02"><span class="fa fa-bars" aria-hidden="true"></span></label>
					<ul class="submenu">
						<li><a href="index.html" class="active">Home</a></li>
						<li><a href="#about">My Self</a></li>
						<li><a href="#what">What i do ?</a></li>
						<li><a href="#resume">My Resume</a></li>
						<li><a href="#projects">Projects</a></li>
						<li><a href="#blog">Blog</a></li>
						<li><a href="#hire">Hire Me</a></li>
					</ul>
				</li>
			</ul>
			<!-- //menu -->
		</div>
	</header>
	<!-- //header -->

	<!-- about -->
	<section class="about py-5 position-relative" id="about">
		<div class="container pt-lg-4 pb-4">
			<h3 class="tittle-2">About Myself</h3>
			<div class="row">
				<div class="col-lg-6 about-img text-center">
					<img class="img-fluid" src="images/ab2.jpg" alt="">
				</div>
				<div class="col-lg-6 about-right">
					<h4 class="about-tit">Hi !<br>I'm Gauransh Dingwani</h4>
                                        <p class="my-4">Presently studying at IIT-ROORKEE i have completed my schooling from L.A.H.S , Gwalior .<br> I am working on my design and development skills. </p>
					<a href="#hire" class="btn button-style-2 mt-5">Hire Me</a>
				</div>
			</div>
		</div>
	</section>
	<!-- //about -->

	<!-- about bottom -->
	<div class="serives-w3pvts pb-5 pt-2">
		<div class="container pb-xl-5 pb-lg-3">
			<div class="row welcome-bottom text-center mx-auto">
				<div class="col-lg-3 col-sm-6 welcome-grid">
					<span class="fa fa-lightbulb-o"></span>
					<h4 class="mt-4 mb-3 text-bl">Creative Director</h4>
				</div>
				<div class="col-lg-3 col-sm-6 welcome-grid mt-sm-0 mt-4">
					<span class="fa fa-bar-chart"></span>
					<h4 class="mt-4 mb-3 text-bl">Graphic Designer</h4>
				</div>
				<div class="col-lg-3 col-sm-6 welcome-grid mt-lg-0 mt-4">
					<span class="fa fa-folder-open"></span>
					<h4 class="mt-4 mb-3 text-bl">Application</h4>
				</div>
				<div class="col-lg-3 col-sm-6 welcome-grid mt-lg-0 mt-4">
					<span class="fa fa-desktop"></span>
					<h4 class="mt-4 mb-3 text-bl">Web Design</h4>
				</div>
			</div>
		</div>
	</div>
	<!-- //about bottom -->

	<!-- stats section -->
	<div class="stats py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="row text-center py-sm-3">
				<div class="col-md-3 col-sm-6 w3layouts_stats_left">
					<p class="counter">800</p>
					<p class="para-text-w3ls text-li">cups of coffee</p>
				</div>
				<div class="col-md-3 col-sm-6 w3layouts_stats_left mt-sm-0 mt-4">
					<p class="counter">600</p>
					<p class="para-text-w3ls text-li">projects</p>
				</div>
				<div class="col-md-3 col-sm-6 w3layouts_stats_left mt-md-0 mt-4">
					<p class="counter">400</p>
					<p class="para-text-w3ls text-li">clients</p>
				</div>
				<div class="col-md-3 col-sm-6 w3layouts_stats_left mt-md-0 mt-4">
					<p class="counter">20</p>
					<p class="para-text-w3ls text-li">partners</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //stats section -->

	<!-- what -->
	<div class="services text-center pt-5 pb-lg-5" id="what">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl mb-sm-5 mb-4">What i do ?</h3>
			<div class="row ser-styles ser-styles-res">
				<div class="col-lg-4">
					<div class="abt-block">
						<div class="dodecagon">
							<div class="dodecagon-in">
								<div class="dodecagon-bg">
									<span class="fa fa-mobile"></span>
								</div>
							</div>
						</div>
						<h3>Mobile Optimize</h3>
						<p>Rutrum congue donec leo eget malesuada.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="abt-block border-back2">
						<div class="dodecagon">
							<div class="dodecagon-in">
								<div class="dodecagon-bg back2">
									<span class="fa fa-lightbulb-o"></span>
								</div>
							</div>
						</div>
						<h3>Innovative Ideas</h3>
						<p>Rutrum congue donec leo eget malesuada.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="abt-block border-back3">
						<div class="dodecagon">
							<div class="dodecagon-in">
								<div class="dodecagon-bg back3">
									<span class="fa fa-pie-chart"></span>
								</div>
							</div>
						</div>
						<h3>Graphic Design</h3>
						<p>Rutrum congue donec leo eget malesuada.</p>
					</div>
				</div>
			</div>
			<div class="row ser-styles">
				<div class="col-lg-4">
					<div class="abt-block border-back4">
						<div class="dodecagon">
							<div class="dodecagon-in">
								<div class="dodecagon-bg back4">
									<span class="fa fa-ravelry"></span>
								</div>
							</div>
						</div>
						<h3>Software</h3>
						<p>Rutrum congue donec leo eget malesuada.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="abt-block border-back5">
						<div class="dodecagon">
							<div class="dodecagon-in">
								<div class="dodecagon-bg back5">
									<span class="fa fa-coffee"></span>
								</div>
							</div>
						</div>
						<h3>Web Design</h3>
						<p>Rutrum congue donec leo eget malesuada.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="abt-block border-back6">
						<div class="dodecagon">
							<div class="dodecagon-in">
								<div class="dodecagon-bg back6">
									<span class="fa fa-umbrella"></span>
								</div>
							</div>
						</div>
						<h3>Increase Revenue</h3>
						<p>Rutrum congue donec leo eget malesuada.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //what -->

	<!-- resume -->
	<div class="middile-inner-con position-relative" id="resume">
		<div class="container pt-lg-5">
			<h3 class="tittle-2">My Resume</h3>
			<div class="d-lg-flex">
				<div class="col-lg-4 left-grid-resu">
					<img src="images/ab2.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-xl-7 col-lg-8 tab-main offset-xl-1 py-lg-0 py-5">
					<input id="tab1" type="radio" name="tabs" class="w3pvt-sm" checked>
					<label for="tab1"><span class="fa fa-graduation-cap" aria-hidden="true"></span>Education</label>
					<input id="tab2" type="radio" class="w3pvt-sm" name="tabs">
					<label for="tab2"><span class="fa fa-briefcase" aria-hidden="true"></span>Experience</label>
					<section id="content1">
						<div class="inner-w3pvt-wrap mt-3">
							<h4>Master Of Design</h4>
							<h6>- Sit amet consectetur- 2014</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lobortis mollis arcu, vel vulputate justo
								consectetur quis. Donec quis fringilla arcu lorem ipsum.</p>
						</div>
						<div class="inner-w3pvt-wrap">
							<h4>Bachelor Degree</h4>
							<h6>- Arcu lorem ipsum- 2010</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lobortis mollis arcu, vel vulputate justo
								consectetur quis. Donec quis fringilla arcu lorem ipsum.</p>
						</div>
						<div class="inner-w3pvt-wrap">
							<h4>Diploma in Information</h4>
							<h6>- Arcu lorem ipsum- 2006</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lobortis mollis arcu, vel vulputate justo
								consectetur quis. Donec quis fringilla arcu lorem ipsum.</p>
						</div>
					</section>
					<section id="content2">
						<div class="inner-w3pvt-wrap mt-3">
							<h4>Front End Developer</h4>
							<h6>- 2016-2018 at fringilla</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lobortis mollis arcu, vel vulputate justo
								consectetur quis. Donec quis fringilla arcu lorem ipsum.</p>
						</div>
						<div class="inner-w3pvt-wrap">
							<h4>Creative Designer</h4>
							<h6> - 2014-2016 at adipiscing</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lobortis mollis arcu, vel vulputate justo
								consectetur quis. Donec quis fringilla arcu lorem ipsum.</p>
						</div>
						<div class="inner-w3pvt-wrap">
							<h4>UI/UX Designer</h4>
							<h6> - 2010-2014 at consectetur</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lobortis mollis arcu, vel vulputate justo
								consectetur quis. Donec quis fringilla arcu lorem ipsum.</p>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
	<!-- //resume -->

<!--	 middle section 
	<section class="w3ls-bnrbtm py-5 text-center">
		<div class="container py-xl-5">
			<div class="cont-w3pvt">
				<h3 class="w3pvt-web-title">I am happy to know you
					that 300+ projects done successfully!</h3>
				<a href="#hire" class="btn button-style mt-sm-5 mt-4">Hire Me</a>
			</div>
		</div>
	</section>
	 //middle section 

	 gallery 
	<div class="gallery py-5" id="projects">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl mb-sm-5 mb-4">Recent Projects</h3>
			<div class="news-grids text-center">
				<div class="row no-gutters news-grids text-center">
					<div class="col-md-4 gal-img">
						<a href="#gal3"><img src="images/g3.jpg" alt="news image" class="img-fluid"></a>
						<a href="#gal2"><img src="images/g2.jpg" alt="news image" class="img-fluid"></a>
					</div>
					<div class="col-md-4 gal-img">
						<a href="#gal4"><img src="images/g4.jpg" alt="news image" class="img-fluid"></a>
						<a href="#gal1"><img src="images/g1.jpg" alt="news image" class="img-fluid"></a>
					</div>
					<div class="col-md-4 gal-img">
						<a href="#gal5"><img src="images/g5.jpg" alt="news image" class="img-fluid"></a>
						<a href="#gal6"><img src="images/g6.jpg" alt="news image" class="img-fluid"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	 popup
	<div id="gal1" class="popup-effect animate">
		<div class="popup">
			<img src="images/g1.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	 //popup 
	 popup
	<div id="gal2" class="popup-effect animate">
		<div class="popup">
			<img src="images/g2.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	 //popup 
	 popup
	<div id="gal3" class="popup-effect animate">
		<div class="popup">
			<img src="images/g3.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	 //popup3 
	 popup
	<div id="gal4" class="popup-effect animate">
		<div class="popup">
			<img src="images/g4.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	 //popup 
	 popup
	<div id="gal5" class="popup-effect animate">
		<div class="popup">
			<img src="images/g5.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	 //popup 
	 popup
	<div id="gal6" class="popup-effect animate">
		<div class="popup">
			<img src="images/g6.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	 //popup 
	 //gallery 

	 testimonials 
	<section class="testimonials py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="testimonials_grid d-flex">
				<div class="offset-lg-4 offset-md-3 testi_grid">
					<p class="sub-test">Integer sit amet mattis quam, sit amet ultricies velit. Nam libero tempore, cum soluta
						nobis est eligendi optio cumque nihil impedit quo minus id quod possimus, omnis voluptas.
					</p>
					<div class="d-flex">
						<span class="fa fa-user" aria-hidden="true"></span>
						<h5>Thomas Carl</h5>
					</div>
				</div>
			</div>
			<div class="testimonials_grid d-flex mt-4">
				<div class="offset-lg-4 offset-md-3 testi_grid">
					<p class="sub-test">Integer sit amet mattis quam, sit amet ultricies velit. Nam libero tempore, cum soluta
						nobis est eligendi optio cumque nihil impedit quo minus id quod possimus, omnis voluptas.
					</p>
					<div class="d-flex">
						<span class="fa fa-user" aria-hidden="true"></span>
						<h5>Anna Mull</h5>
					</div>
				</div>
			</div>
		</div>
	</section>
	 //testimonials -->

	<!-- blog -->
	<section class="blog_w3ls py-5" id="blog">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl mb-sm-5 mb-4">Recent Blog</h3>
			<div class="row">
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6">
					<div class="med-blog">
						<div class="blog-header">
							<a href="#">
								<img class="img-fluid" src="images/blog1.jpg" alt="image">
							</a>
						</div>
						<div class="blog-body py-4">
							<span>Feb 12, 2019 - loremipsum</span>
							<a href="#" class="blog-title">Dictum porta auris magna umgtdd fos</a>
							<p>Cras ultricies ligula sed magna dictum portaout auris blandita. Nulla viverra pharetra se.</p>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6 mt-md-0 mt-3">
					<div class="med-blog">
						<div class="blog-header">
							<a href="#">
								<img class="img-fluid" src="images/blog2.jpg" alt="image">
							</a>
						</div>
						<div class="blog-body py-4">
							<span>Feb 14, 2019 - pharetra</span>
							<a href="#" class="blog-title">Quis autem vel eum iure reprehdd ende</a>
							<p>Cras ultricies ligula sed magna dictum portaout auris blandita. Nulla viverra pharetra se.</p>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
				<!-- blog grid -->
				<div class="col-lg-4 col-md-6 mx-lg-0 mx-md-auto mt-lg-0 mt-3">
					<div class="med-blog">
						<div class="blog-header">
							<a href="#">
								<img class="img-fluid" src="images/blog3.jpg" alt="image">
							</a>
						</div>
						<div class="blog-body py-4">
							<span>Feb 16, 2019 - portaout</span>
							<a href="#" class="blog-title">Suscipit labo iosam nisi ut aliquid</a>
							<p>Cras ultricies ligula sed magna dictum portaout auris blandita. Nulla viverra pharetra se.</p>
						</div>
					</div>
				</div>
				<!-- //blog grid -->
			</div>
		</div>
	</section>
	<!-- //blog -->

	<!-- contact -->
	<section class="contact py-5" id="hire">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center text-bl mb-sm-5 mb-4">Talk to me !</h3>
			<div class="contact-form mx-auto text-center">
				<form method="post" action="#">
					<div class="row">
						<div class="col-lg-6 form-group">
							<input type="text" class="form-control" placeholder="Name" name="name" required="">
						</div>
						<div class="col-lg-6 form-group">
							<input type="email" class="form-control" placeholder="Email" name="email" required="">
						</div>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Subject" name="subject" required="">
					</div>
					<div class="form-group">
						<textarea name="message" class="form-control" placeholder="Message" required=""></textarea>
					</div>
					<button type="submit" class="btn submit-button mt-md-4 mt-3">Submit</button>
				</form>
			</div>
		</div>
	</section>
	<!-- //contact -->

	<!-- footer -->
	<footer class="text-center py-5">
		<div class="container py-xl-5 py-lg-4">
			<div class="logo-2">
				<h2><a href="index.html" class="logo text-wh text-uppercase font-weight-light">Gauransh</a></h2>
				<p class="foot-para mx-auto mt-3">Get your dreams before they leave your mind.</p>
			</div>
			<div class="w3pvt-webinfo_social_icons mt-lg-5 mt-4">
				<h3 class="footer-title text-wh mb-lg-4 mb-3">Follow Me</h3>
				<ul class="w3pvt-webits_social_list list-unstyled">
					<li class="w3_w3pvt-web_facebook">
						<a href="#">
							<span class="fa fa-facebook-f"></span>
						</a>
					</li>
					<li class="mx-2 w3pvt-web_twitter">
						<a href="#">
							<span class="fa fa-twitter"></span>
						</a>
					</li>
					<li class="w3_w3pvt-web_dribble">
						<a href="#">
							<span class="fa fa-dribbble"></span>
						</a>
					</li>
					<li class="ml-2 w3_w3pvt-web_google">
						<a href="#">
							<span class="fa fa-google-plus"></span>
						</a>
					</li>
				</ul>
			</div>
			<div class="cpy-right text-center mx-auto py-3">
				<p class="border-top mt-lg-5 mt-4">gauransh7dingwani@gmail.com. All rights reserved | Design by
					<a href="index.html">gauransh dingwani</a>
				</p>
			</div>
		</div>
	</footer>
	<!-- //footer -->
	<!-- move top icon -->
	<a href="#home" class="move-top text-center"></a>
	<!-- //move top icon -->

</body>

</html>