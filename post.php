<?php 
include './include/db.php';
session_start();
?>

    <?php


?>
	<?php
        if(isset($_POST['submit']))
{
    $blog_title=$_POST['blog_title'];
       $blog_sub= $_POST['blog_sub'];
       $blog_des= $_POST['blog_des']; 
       $category= $_POST['category'];
       $userID=  $_SESSION['user_id'];
       
       
  $thumbnail_img = $_FILES['thumbnail']['name'];
    $thumbnail_img_temp = $_FILES['thumbnail']['tmp_name'];
    move_uploaded_file($thumbnail_img_temp, "./blog_img/$thumbnail_img");
    
    
 $query="INSERT INTO `blog`(`blog_title`, `blog_subtitle`, `thumbnail`, `content`, `user_id`, `status`,`cate_id`,`created`,`likes`,`comments`,`views`, `status_remark`) VALUES ('$blog_title','$blog_sub','$thumbnail_img','$blog_des','$userID','1','$category',now(),'0','0','0','nil')";   
 $insertData=mysqli_query($conn, $query);

 $query1="select * from `blog` WHERE `blog_title`= '$blog_title' and `blog_subtitle` = '$blog_sub' and `user_id` = $userID";
     $insert_data1 = mysqli_query($conn,$query1);

 $row = mysqli_fetch_array($insert_data1);                  
 if(!$row)
 {
     die('Query Faild'. mysqli_error($conn));
 }
 else {
//     echo 'done'; 
                $sid = $row['blog_id'];
                header("location:single.php?id=$sid");
 }
 
 
} 

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php include './include/head.php';?>
</head>

<body>
	<!--Header-->
        <header>
	<?php include './include/header.php';?>
        </header>
	<!--//header-->
        <section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row container">
            <div class="col-lg-12">
                    <section class="panel">
                        <center><header class="panel-heading">
                        ADD YOUR BLOG
                            </header></center>
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
                                    <label style="align-content : left">Blog Title: </label>
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
                                    <script src="./admin/ckeditor/ckeditor.js" type="text/javascript"></script>
                                    <script src="./admin/ckeditor/sample.js" type="text/javascript"></script>
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
                       
        
        
<!--        <script src="js/jquery-2.2.3.min.js"></script>
	 //js 
	/ start-smoth-scrolling 
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>-->
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
        
        
        <script src="js/bootstrap.js"></script>





</body>

</html>