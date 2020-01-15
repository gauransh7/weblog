<?php 
include './include/db.php';
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
    <head>
       
	<?php include './include/head.php';
        ?>
        
</head>


    <?php 
    if(isset($_POST['comment'])){
       
        $url='';
                                                            if (isset($_SESSION['user_id'])) {
        //  header("location:login.php");
        
    } else {
        //   header("location:post.php)");
       echo "<script>window.location.href='./login.php';</script>";
    }

    $cmnt_des = $_POST['Message'];
        $user_id = $_SESSION['user_id'];
        $blog_id = $_GET['id'];
        $query = "SELECT * FROM `blog` WHERE blog_id = $blog_id";
        $select_data =  mysqli_query($conn, $query);
        $row = mysqli_fetch_array($select_data);
        $comments = $row['comments'];
        $comments++;
        $query = "INSERT INTO `comment`(`user_id`, `cmnt_des`, `cmnt_status`, `cmnt_created`, `blog_id`) VALUES ($user_id,'$cmnt_des',1,now(),$blog_id)";
        $insert_data = mysqli_query($conn, $query);
        $query2 = " UPDATE `blog` SET `comments`=$comments WHERE `blog_id`=$blog_id";
           $run_fun = mysqli_query($conn, $query2);
    }
    
    
    
    
    
    
    
    
    
    
    
if(isset($_GET['id'])){
    $sid = $_GET['id'];
    $query1="SELECT blog.blog_title , blog.blog_subtitle , blog.thumbnail , blog.views ,blog.likes ,blog.comments , blog.content , blog.created , blog.status , blog.status_remark , blog.created , user_details.user_id , user_details.name , category.cate_id , category.cate_name , blog.blog_id , blog.blog_title FROM user_details , category , blog WHERE user_details.user_id = blog.user_id && category.cate_id = blog.cate_id && blog_id = '$sid'";
         //  $select_data= mysqli_query($conn, $query);
           $select_data1= mysqli_query($conn ,$query1);
           
            $row = mysqli_fetch_array($select_data1);
//            if(!$row){
//        die('QUERY FAILED'.mysqli_error($conn));
//    }
//    else
//    {
//    
//        echo 'success';    
//    }
                //$row1 = mysql_fetch_array($select_data1);
            $view = $row['views'];
            $comment = $row['comments'];
            $like = $row['likes'];
               $blog_title = $row['blog_title'];
               $blog_subtitle = $row['blog_subtitle'];
               $thumbnail = $row['thumbnail'];
               $content = $row['content'];
               $user_created = $row['created'];
               $user = $row['name'];
               $status = $row['status'];
               $status_remark = $row['status_remark'];
               $cate = $row['cate_name'];
               $created = $row['created'];
               $view++;
           $query2 = " UPDATE `blog` SET `views`=$view WHERE `blog_id`=$sid";
           $run_fun = mysqli_query($conn, $query2);

}
?>


<body>
	<!--Header-->

	<header>
		<?php include './include/header.php';?>
	</header>
	<!--//header-->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">Single</li>
	</ol>

	<!--//banner-->
	<section class="banner-bottom">
		<!--/blog-->
		<div class="container">
			<div class="row">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<div class="blog-grid-top">
						<div class="b-grid-top">
							<div class="blog_info_left_grid">
								
                                                                    <img src="./blog_img/<?php echo $thumbnail;?>" class="img-fluid" alt="">
								
							</div>
							<div class="blog-info-middle">
								<ul>
									<li style="color: greenyellow">
										
                                                                            <i class="far fa-calendar-alt" style="color: greenyellow"></i> <?php echo $created;?>
									</li>
									<li class="mx-2" style="color: red">
										
											<i class="far fa-thumbs-up" style="color: red"></i><?php echo $like.'likes'?>
									</li>
									<li style="color: blue">
										
											<i class="far fa-comment" style="color: blue"></i><?php echo $comment.'comments'?>
									</li>
                                                                        <li style="color: blue">
										
											<i class="far fa-comment" style="color: blue"></i><?php echo $view.'views'?>
									</li>
									
								</ul>
							</div>
						</div>

						<h3>
							<?php echo $blog_title;?>
						</h3>
                                           
                                            <p><?php echo substr($content, 0, 100).'... <a href="singlef.php?id='.$sid.'">Read More</a>';?></p>
						<a href="singlef.php?id=<?php echo $sid?>" class="btn btn-primary read-m">Read More</a>
					</div>
                                    <div class="comment-top">
                                            <center><h4>Comments</h4></center>
                                    <?php 
                                    $cid = $_GET['id'];
                                    $query ="SELECT blog.blog_title , blog.blog_subtitle ,blog.comments , comment.cmnt_des , blog.thumbnail , blog.content , blog.created , blog.status , blog.status_remark , blog.created , user_details.user_id , user_details.name , category.cate_id , category.cate_name , blog.blog_id , blog.blog_title FROM user_details , comment , category , blog WHERE comment.blog_id = blog.blog_id and user_details.user_id = blog.user_id and category.cate_id = blog.cate_id and blog.blog_id = '$cid' LIMIT 2";
                                    $select_data = mysqli_query($conn, $query);
                                   
                                    
                                                     
                                   while($row = mysqli_fetch_array($select_data))
                                           
                                                     {
                                           
                                      
                                        $comment = $row['comments'];
                                        $name = $row['name'];
                                        $message = $row['cmnt_des'];
                                   ?>
					
						<div class="media">
							
							<div class="media-body">
								<h5 class="mt-0"><?php echo '@'.$name;?></h5>
								<p><?php echo $message;?></p>
                                                                <br>
							</div>
						</div>
					
                                   <?php } ?>
                                            </div>
					<div class="comment-top">
                                            <center><h4>Leave a Comment</h4></center>
						<div class="comment-bottom">
							<form action="#" method="post">
                                                            <label>Message :</label>
                                                            <textarea class="form-control" name="Message" placeholder="Message..." required=""></textarea><br>
                                                            <center><button type="submit" name="comment" class="btn btn-primary submit">Submit</button></center>
							</form>
						</div>
					</div>
				</div>

				<!--//left-->
				<!--right-->
				<?php include './include/mainright.php';?>
				<!--//right-->
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