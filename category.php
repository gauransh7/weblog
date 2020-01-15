<?php 
include './include/db.php';
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Weblog a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
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
    <?php include './include/header.php';?>
    <div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.html">Home</a>
		</li>
		<li class="breadcrumb-item active">About</li>
	</ol>
    <section class="main-content-w3layouts-agileits">
		<div class="container">
			<h3 class="tittle"><?php echo '';?></h3>
			<div class="row inner-sec">
                            <div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
                                <!--left-->
                            <?php 
                            if(isset($_GET['id'])){
    $cid = $_GET['id'];
    $query1="SELECT blog.blog_title , blog.blog_subtitle , blog.thumbnail , blog.content , blog.created , blog.status , blog.status_remark , blog.created , user_details.user_id , user_details.name , category.cate_id , category.cate_name , blog.blog_id , blog.blog_title FROM user_details , category , blog WHERE user_details.user_id = blog.user_id && category.cate_id = blog.cate_id && category.cate_id = '$cid' LIMIT 2";
         //  $select_data= mysqli_query($conn, $query);
           $select_data1= mysqli_query($conn ,$query1);
          while($row = mysqli_fetch_array($select_data1)) {
                            $blog_title = $row['blog_title'];
                            $blog_id = $row['blog_id'];
               $blog_subtitle = $row['blog_subtitle'];
               $thumbnail = $row['thumbnail'];
               $content = $row['content'];
               $user_created = $row['created'];
               $user = $row['name'];
               $status = $row['status'];
               $status_remark = $row['status_remark'];
               $cate = $row['cate_name'];
               $created = $row['created'];
                            ?> 
					<article class="blog-grid-top">
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
										
											<i class="far fa-thumbs-up" style="color: red"></i> 201 Likes
									</li>
									<li style="color: blue">
										
											<i class="far fa-comment" style="color: blue"></i> 15 Comments
									</li>
									
								</ul>
							</div>
						</div>

						<h3>
							<?php echo $blog_title;?>
						</h3>
                                           
                                            <p><?php echo substr($content, 0, 100).'... <a href="singlef.php?id='.$blog_id.'">Read More</a>';?></p>
						<a href="singlef.php?id=<?php echo $blog_id;?>" class="btn btn-primary read-m">Read More</a>
					</article>
                                <?php 
           }
                            }
                                ?>
<!--					<article class="blog-grid-top my-5">
						<div class="b-grid-top">
							<div class="blog_info_left_grid">
								<a href="single.html">
									<img src="images/b4.jpg" class="img-fluid" alt="">
								</a>
							</div>
							<div class="blog-info-middle">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> FEB 15,2018</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-thumbs-up"></i> 201 Likes</a>
									</li>
									<li>
										<a href="#">
											<i class="far fa-comment"></i> 15 Comments</a>
									</li>

								</ul>
							</div>
						</div>

						<h3>
							<a href="single.html">Amet consectetur adipisicing </a>
						</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
							aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis
							aute irudre dolor in elit sed uta labore dolore reprehender</p>
						<a href="single.html" class="btn btn-primary read-m">Read More</a>
					</article>
					<article class="blog-grid-top mb-4">
						<div class="b-grid-top">
							<div class="blog_info_left_grid">
								<a href="single.html">
									<img src="images/b1.jpg" class="img-fluid" alt="">
								</a>
							</div>
							<div class="blog-info-middle">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> FEB 15,2018</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-thumbs-up"></i> 201 Likes</a>
									</li>
									<li>
										<a href="#">
											<i class="far fa-comment"></i> 15 Comments</a>
									</li>

								</ul>
							</div>
						</div>

						<h3>
							<a href="single.html">Amet consectetur adipisicing </a>
						</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
							aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis
							aute irudre dolor in elit sed uta labore dolore reprehender</p>
						<a href="single.html" class="btn btn-primary read-m">Read More</a>
					</article>-->
					<nav aria-label="Page navigation example">
						<ul class="pagination justify-content-left">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1">Previous</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">1</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">2</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">3</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">Next</a>
							</li>
						</ul>
					</nav>
				</div>
				<!--//left-->
				<!--right-->
				<?php include './include/mainright.php';?>
				<!--//right-->
			</div>
		</div>
	</section>
    <?php include './include/footer.php';?>
</body>
</html>