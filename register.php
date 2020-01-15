<?php 
include './include/db.php';
session_start();
?><!DOCTYPE html>
<html lang="zxx">

<head>
    <?php

?>
    <?php include './include/head.php';
    if(isset($_POST['register']))
{
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $password = password_hash($_POST['Password'],PASSWORD_DEFAULT);
    $mob = $_POST['Phone'];
    
    $query = "INSERT INTO `user_details`(`name`, `mobile_no`, `password`,`email_id`,`created`,`status`,`user_role`,`last_login`,`profile_update`) VALUES ('$name','$mob','$password','$email',now(),'1','0','0000-00-00 00:00:00 	','0000-00-00 00:00:00 	')";
    $enter_data= mysqli_query($conn, $query);
    
if(!$enter_data){
        die('QUERY FAILED'.mysqli_error($conn));
    }
    else
    {
    
        echo 'success';    
    }
        $query1 = "select * from user_details where email_id='$email'";
   $select_user = mysqli_query($conn, $query1);
    
    $count=mysqli_num_rows($select_user);

if($count>0) {
    while ($row = mysqli_fetch_array($select_user)) {
        $user_role = $row['user_role'];
        $status = $row['status'];
        $user_id = $row['user_id'];
        $user_name = $row['name'];
        $pass = $_POST["Password"];
        $upass = $row["password"];
        if(password_verify($pass,$upass)){
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
        die('QUERY FAILED'.mysqli_error($conn));
//echo "<script>alert ('Pls Check Password');</script>";
    }
}
        }
        
else
{
     echo "<script>alert ('Pls Check User ID and Password');</script>";
}
}
    

    ?>
</head>

<body>
	<!--Header-->

	<?php include './include/header.php';?>
	<!--//header-->

	<!--/banner-->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">Register</li>
	</ol>
	<!--//banner-->
	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<h3 class="tittle">Register Now</h3>
				<div class="inner-sec">
			<div class="login p-5 bg-light mx-auto mw-100">
				<form action="#" method="post">
						<div class="form-group">
                                    <label>Name: </label>
                                    <input type="text" class="form-control" name="Name" placeholder="NAME" required="">
			
                                </div>
                                <div class="form-group">
                                    <label>EMAIL: </label>
                                    <input type="email" class="form-control" name="Email" placeholder="E-MAIL" required="">
                                </div>
                                     <div class="form-group">
                                    <label>PHONE: </label>
                                    	<input type="text" class="form-control" name="Phone" placeholder="PHONE" required="">
			
                                </div>
                                    <div class="form-group">
                                    <label>PASSWORD: </label>
                                    	<input type="password" class="form-control" name="Password" placeholder="PASSWORD" required="">
			
                                </div>
                                    <center><input type="submit" name="register" value ="register" class="btn btn-primary submit mb-4"></center>
								<p>
									<a href="#">By clicking Signup, I agree to your terms</a>
								</p>
						</form>
		
					</div>
			</div>
		</div>
	</section>
	<!--//main-->
	<!--footer-->
	<footer>
		<?php include './include/footer.php';?>
	</footer>
	<!---->	
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
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