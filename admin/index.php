<?php
include '../include/db.php';
session_start();
if (isset($_POST['login'])) {
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $query = "select * from user_details where password='$Password' and email_id='$Email'";
    $select_user = mysqli_query($conn, $query);
    
    $count=mysqli_num_rows($select_user);

if($count>0) {
    while ($row = mysqli_fetch_array($select_user)) {
        $user_role = $row['user_role'];
        $status = $row['status'];
        $user_id = $row['user_id'];
        $user_name = $row['user_name'];
        if ($status == 1) {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_role'] = $user_role;
            $_SESSION['status'] = $status;
            $_SESSION['user_name'] = $user_name;
            if ($user_role == 1) {
                echo "<script>alert ('Login Successfull');
       window.location.href='dashboard.php';
       </script>";
            } elseif ($user_role == 2) {
                echo "<script>alert ('Login Successfull');
       window.location.href='../index.html';
       </script>";
            } else {
                echo "<script>alert ('Pls Contact Admin');</script>";
            }
        } else {
             echo "<script>alert ('Pls Contact Admin 1');</script>";
        }
    }
}
else
{
     echo "<script>alert ('Pls Check User ID and Password');</script>";
}
}
?>
<!DOCTYPE html>
<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Login :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
          Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/style-responsive.css" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font.css" type="text/css"/>
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <!-- //font-awesome icons -->
    <script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
    <div class="log-w3">
        <div class="w3layouts-main">
            <h2>Sign In Now</h2>
            <form action="#" method="post">
                <input type="email" class="ggg" name="Email" placeholder="E-MAIL" required="">
                <input type="password" class="ggg" name="Password" placeholder="PASSWORD" required="">
                <!--<span><input type="checkbox" />Remember Me</span>-->
                <!--<h6><a href="#">Forgot Password?</a></h6>-->
                <div class="clearfix"></div>
                <input type="submit" value="Sign In" name="login">
            </form>
            <!--<p>Don't Have an Account ?<a href="registration.html">Create an account</a></p>-->
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
