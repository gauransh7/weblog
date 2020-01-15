
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
    $blog_title=$_POST['blog_title'];
       $blog_sub= $_POST['blog_sub'];
       $blog_des= $_POST['blog_des']; 
       $category= $_POST['category'];
       $userID=  $_SESSION['user_id'];
       
       
  $thumbnail_img = $_FILES['thumbnail']['name'];
    $thumbnail_img_temp = $_FILES['thumbnail']['tmp_name'];
    move_uploaded_file($thumbnail_img_temp, "../blog_img/$thumbnail_img");
    
    
 $query="INSERT INTO `blog`(`blog_title`, `blog_subtitle`, `thumbnail`, `content`, `user_id`, `status`,`cate_id`,`created`) VALUES ('$blog_title','$blog_sub','$thumbnail_img','$blog_des','$userID','1','$category',now())";   
 $insertData=mysqli_query($conn, $query);
 if(!$insertData)
 {
     die('Query Faild'. mysqli_error($conn));
 }
 else {
//     echo 'done';
     
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
                        ADD YOUR BLOG
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="#" method="post" enctype="multipart/form-data">
                                     <div class="form-group">
                                    <label>Category </label>
                                    <!--<input type="text" name="blog_title" class="form-control">-->
                                    <select name="category" class="form-control">
                                        <option>--Select Category--</option>
                                              <?php
            $query=" select * from category where status='1'";
           $select_data= mysqli_query($conn, $query);
           $count =0;
            while ($row = mysqli_fetch_array($select_data)) {
                $count++;
               $cate_id=$row['cate_id'];
                    $cate_name=    $row['cate_name'];
                    $cate_des=    $row['cate_des'];
                    $sort_order=    $row['sort_order'];
                    $status=    $row['status']; 
                      $created=  $row['created'];
                      ?>
          
                                        <option value="<?php echo $cate_id;?>"><?php echo $cate_name;?></option>
            <?php }?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Blog Title: </label>
                                    <input type="text" name="blog_title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Blog Sub-title </label>
                                    <input type="text" name="blog_sub"  class="form-control">
                                </div>  
                                    <div class="form-group">
                                    <label>thumbnail </label>
                                    <input type="file" name="thumbnail"  class="form-control">
                                </div>
                                    <div class="form-group">
                                    <label>Blog Description: </label>
                                    <textarea name="blog_des" id="editor"></textarea>
                                    <script src="ckeditor/ckeditor.js" type="text/javascript"></script>
                                    <script src="ckeditor/sample.js" type="text/javascript"></script>
                                    <script>
	initSample();
</script>
                                    <!--<input type="text" name="blog_des" class="form-control">-->
                                    </div>
<!--                                    <div class="form-group">
                                    <label>Category: </label>
                                    <input type="text" name="category" class="form-control">
                                    </div>-->
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
