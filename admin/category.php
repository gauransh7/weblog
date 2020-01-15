
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

if(isset($_POST['submit']))
{
    $cate_name=$_POST['cate_name'];
       $cate_disc= $_POST['cate_disc'];
       $cate_sort= $_POST['cate_sort'];
 $query="INSERT INTO `category`(`cate_name`, `cate_des`, `sort_order`, `status`, `created`) VALUES ('$cate_name','$cate_disc','$cate_sort',1,now())";   
 mysqli_query($conn, $query);
 
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
                        Category
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="#" method="post">
                                <div class="form-group">
                                    <label>Category Name: </label>
                                    <input type="text" name="cate_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Category Disc: </label>
                                    <input type="text" name="cate_disc"  class="form-control">
                                </div>
                                    <div class="form-group">
                                    <label>Category Sort Order: </label>
                                    <input type="number" name="cate_sort" class="form-control">
                                </div>
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
