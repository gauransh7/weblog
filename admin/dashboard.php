<!DOCTYPE html>
<head>
    <?php
$host="localhost";
        $user="root";
        $password="";
        $database="myblog1";
$conn= mysqli_connect($host, $user, $password, $database);


?>
<?php include './include/head.php';?>
</head>
<body>
<section id="container">
<!--header start-->
<?php include './include/header.php';?>
<!--header end-->
<!--sidebar start-->
<?php include './include/menu.php';?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper"><br><br>
		<!-- //market-->
		<div class="market-updates">
			<div class="col-md-6 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-6 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
					 <div class="col-md-6 market-update-left">
					 <h4>Visitors</h4>
					<h3>13,500</h3>
					<p></p>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
                 
			<div class="col-md-6 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-6 market-update-right">
						<i class="fa fa-users" ></i>
					</div>
					<div class="col-md-6 market-update-left">
					<h4>Users</h4>
						<h3>1,250</h3>
						<p></p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
                    <br><br>
                    <section id="main2-content">
	<section class="wrapper">
                    
			<div class="col-md-6 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-6 market-update-right">
						<i class="fa fa-usd"></i>
					</div>
					<div class="col-md-6 market-update-left">
						<h4>posts</h4>
						<h3>1,500</h3>
						<p></p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-6 market-update-gd">
				<div class="market-update-block clr-block-4">
					<div class="col-md-6 market-update-right">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</div>
					<div class="col-md-6 market-update-left">
						<h4>comments</h4>
						<h3>1,500</h3>
						<p></p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>		
		<!-- //market-->
		
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
                            <p>All rights reserved | Design by <a href="../personal/index.html">Gauransh Dingwani</a></p>
			</div>
		  </div>
 <script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>

	
</body>
</html>
