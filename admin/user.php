<!DOCTYPE html>
<head>
    <?php
$host="localhost";
        $user="root";
        $password="";
        $database="myblog1";
$conn= mysqli_connect($host, $user, $password, $database);


?>
<?php include './include/head.php';
if(isset($_POST['register']))
{
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $mob = $_POST['Phone'];
    
    $query = "INSERT INTO `user_details`(`name`, `mobile_no`, `password`,`email_id`,`created`,`status`,`user_role`) VALUES ('$name','$mob','$password','$email',now(),'1','1')";
    $enter_data= mysqli_query($conn, $query);
    if(!$enter_data){
        die('QUERY FAILED'.mysqli_error($conn));
    }
    else
    {
    
        echo 'success';    
    }
    
}
?>
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
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                        ADD USER
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
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
                                    <h4><input type="checkbox" />I agree to the Terms of Service and Privacy Policy</h4>
			
				
<!--                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" id="exampleInputFile">
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>-->
<!--                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Check me out
                                    </label>
                                </div>-->
<center><button type="submit" name="submit" class="btn btn-info">Submit</button></center>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>
     


        <!-- page end-->
        </div>
</section>
 <!-- footer -->
		<?php include './include/footer.php';?>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
