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

if(isset($_POST['sub']))
{
    $cate_name=$_POST['cate_name'];
       $cate_disc= $_POST['cate_disc'];
       $cate_sort= $_POST['cate_sort'];
       $eid = $_GET['cate_id'];
 $query="UPDATE `category` SET `cate_name`=$cate_name,`cate_des`=$cate_disc,`sort_order`=$cate_sort WHERE id='$eid'";   
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
                                   <?php
                                   if(isset($_GET['id'])){
            $eid = $_GET['id'];
            $query = "select * from category where cate_id = '$eid'";
            $select_data = mysqli_query($conn,$query);
             if(!$select_data){
        die('QUERY FAILED'.mysqli_error($conn));
    }
    else
    {
    
        echo 'success';    
    }
            $cnt =0;
            while( $row = mysqli_fetch_array($select_data))
            {
                                   ?>
                                <div class="form-group">
                                    <label>Category Name: </label>
                                    <input type="text" value = "<?php echo $row['cate_name'];?>" name="cate_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Category Disc: </label>
                                    <input type="text" value = "<?php echo $row['cate_des'];?>" name="cate_disc"  class="form-control">
                                </div>
                                    <div class="form-group">
                                    <label>Category Sort Order: </label>
                                    <input type="number" value = "<?php echo $row['sort_order'];?>" name="cate_sort" class="form-control">
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
<center><input type="submit" value="update" name="sub"></center>
<?php
            }
                                   }
?>
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
