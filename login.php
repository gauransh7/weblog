<?php 
include './include/db.php';
?>
<!DOCTYPE html>
<html lang="zxx">
<?php
session_start();
if (isset($_POST['submit'])) {
    $Email = $_POST['Email'];
    $Password = $_POST["Password"];
    
    $query = "select * from user_details where email_id='$Email'";
    $select_user = mysqli_query($conn, $query);
    
    $count=mysqli_num_rows($select_user);

if($count>0) {
    while ($row = mysqli_fetch_array($select_user)) {
        $user_role = $row['user_role'];
        $status = $row['status'];
        $user_id = $row['user_id'];
        $user_name = $row['name'];
        if(password_verify($Password, $row["password"])==true){
            if ($status == 1) {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_role'] = $user_role;
            $_SESSION['status'] = $status;
            $_SESSION['user_name'] = $user_name;
            if ($user_role == 1) {
                echo "<script>alert ('Login Successfull');
       window.location.href='./admin/dashboard.php';
       </script>";
            } elseif ($user_role == 0) {
                echo "<script>alert ('Login Successfull');
       window.location.href='./index.php';
       </script>";
            } else {
                echo "<script>alert ('Pls Contact Admin');</script>";
            }
        } else {
             echo "<script>alert ('Pls Contact Admin 1');</script>";
        }
    }
    else
    {
        echo "<script>alert ('Pls Check Password');</script>";
    }
}
        }
        
else
{
     echo "<script>alert ('Pls Check User ID and Password');</script>";
}
}
    

?>
<head>
	<title>home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Weblog a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/jquery.desoslide.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<!--Header-->

	<header>
		<?php 
        include './include/header.php';
                ?>
	</header>
	<!--//header-->

	<!--/banner-->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.html">Home</a>
		</li>
		<li class="breadcrumb-item active">Signin</li>
	</ol>
	<!--//banner-->
	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
				<h3 class="tittle">Sign In Now</h3>
				<div class="row inner-sec">
					<div class="login p-5 bg-light mx-auto mw-100">
					<form action="#" method="post">
							<div class="form-group">
							  <label for="exampleInputEmail1 mb-2">Email address</label>
							  <input type="email" name = "Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
							  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
							  <label for="exampleInputPassword1 mb-2">Password</label>
							  <input type="password" name = "Password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
							</div>
							<div class="form-check mb-2">
							  <input type="checkbox" class="form-check-input" id="exampleCheck1">
							  <label class="form-check-label" for="exampleCheck1">Check me out</label>
							</div>
							<button type="submit" name = "submit" class="btn btn-primary submit mb-4">Sign In</button>
							<p><a href="register.html"> Don't have an account?</a></p>
						  </form>
		</div>
		</div>
	</div>
	</section>
	<!--//main-->
	<!--footer-->
<?php include './include/footer.php';?>
	<!---->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
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

	<!-- //Custom-JavaScript-File-Links -->
	<script src="js/bootstrap.js"></script>


</body>

</html>