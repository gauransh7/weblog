<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 logo text-left">
					<a class="navbar-brand" href="index.php">
                                            <img src="./blog_img/logo.jpg"></a>
				</div>
                           
                           <?php 
                          
                           if(isset($_SESSION['user_id']))
{ ?>
    <div class="col-md-4 top-forms text-center mt-lg-3 mt-md-1 mt-0">
					<span class="mx-lg-4 mx-md-2  mx-1">
						
                                            <i class="fas fa-door-open" style="color: greenyellow"></i> welcome <?php echo $_SESSION['user_name']?>
					</span>
					<span>
                                            <a href="logout.php">
							<i class="far fa-user"></i>logout</a>
					</span>
				</div>
				<div class="col-md-4 log-icons text-right">

					<ul class="social_list1 mt-3">

						<li>
							<a href="https://www.facebook.com/gauransh.dhoni7" class="facebook1 mx-2">
								<i class="fab fa-facebook-f"></i>

							</a>
						</li>
						<li>
							<a href="https://www.linkedin.com/in/gauransh-dingwani-1a9431199/" class="twitter2">
								<i class="fab fa-linkedin-in"></i>

							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/gauransh_dingwani/" class="dribble3 mx-2">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
<?php
}
 else { ?>
  <div class="col-md-4 top-forms text-center mt-lg-3 mt-md-1 mt-0">
					<span class="mx-lg-4 mx-md-2  mx-1">
						<a href="login.php">
							<i class="fas fa-lock"></i>sign in</a>
					</span>
					<span>
						<a href="register.php">
							<i class="far fa-user"></i>register</a>
					</span>
				</div>
				<div class="col-md-4 log-icons text-right">

					<ul class="social_list1 mt-3">

						<li>
							<a href="https://www.facebook.com/gauransh.dhoni7" class="facebook1 mx-2">
								<i class="fab fa-facebook-f"></i>

							</a>
						</li>
						<li>
							<a href="https://www.linkedin.com/in/gauransh-dingwani-1a9431199/" class="twitter2">
								<i class="fab fa-linkedin-in"></i>

							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/gauransh_dingwani/" class="dribble3 mx-2">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
<!--   // echo "<script>window.location.href='./admin/index.php';</script>";-->
 <?php } ?>
				
			<div class="header_top" id="home">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				   </button>


					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link" href="index.php">Home
									<span class="sr-only"></span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="../personal/index.html">About</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
								    aria-expanded="false">
									Categories
								</a>
                                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                            <?php 
                                                            $query=" select * from category";
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
								
									<a class="dropdown-item" href="category.php?id=<?php echo $cate_id;?>"><?php echo $cate_name; ?></a>
									<div class="dropdown-divider"></div>
									<?php 
            }
                                                                        ?>

								</div>
							</li>
                                                        <li class="nav-item">
                                                            <?php 
                                                            $url='';
                                                            if(isset($_SESSION['user_id']))
                                                                {
                                                              //  header("location:login.php");
                                                                $url="post.php";
                                                                }
                                                                else
                                                                    {
                                                                 //   header("location:post.php)");
                                                                    $url="login.php";
                                                                }
                                                                ?>
                                                            <a class="nav-link" href="<?php echo $url;?>">ADD-BLOG</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.php">Contact</a>
							</li>

						</ul>
							<form action="index.php" method="get" class="form-inline my-2 my-lg-0 header-search">
<!--                                                             <script>
                                                            $(function() {
                                                            $("#skill_input").autocomplete({
                                                            source: "search.php",
                                                            });
                                                            });
                                                            </script>
                                                            <?php
                                                           
// Check connection 
//                                                            if ($conn->connect_error) {
//                                                                die("Connection failed: " . $conn->connect_error);
//                                                            }
//                                                            
//
//// Get search term 
//                                                            $searchTerm = $_GET['term'];
//
//// Fetch matched data from the database 
//                                                            $query = $conn->query("SELECT * FROM blog WHERE blog_title LIKE '%" . $searchTerm . "%' AND status = 1 ORDER BY blog_title ASC");
//
//// Generate array with skills data 
//                                                            $blogData = array();
//                                                            if ($query->num_rows > 0) {
//                                                                while ($row = $query->fetch_assoc()) {
//                                                                    $data['id'] = $row['id'];
//                                                                    $data['value'] = $row['skill'];
//                                                                    array_push($blogData, $data);
//                                                                }
//                                                            }
//
//// Return results as json encoded array 
//                                                            echo json_encode($blogData);                                                         
                                                                ?>
                                                            $(function() {
                                                            $("#skill_input").autocomplete( {
                                                            source: "search.php",
                                                            select: function( event, ui ) {
                                                            event . preventDefault();
                                                            $("#skill_input") . val(ui . item . id);
                                                            }
                                                            });
                                                            });-->
								<input class="form-control mr-sm-2" type="search" placeholder="Search here..." name="Search" required="">
								<button class="btn btn1 my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
							</form>
		
						

					</div>
				</nav>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- jQuery UI library -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

			</div>