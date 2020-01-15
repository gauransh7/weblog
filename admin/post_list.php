<!DOCTYPE html>
<head>
    <?php
$host="localhost";
        $user="root";
        $password="";
        $database="myblog1";
$conn= mysqli_connect($host, $user, $password, $database);


?>
<?php include './include/head.php';?>
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
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      POST DETAILS
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
<!--            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>-->
<!--            <th>Project</th>
            <th>Task</th>
            <th>Date</th>-->
            <!--`cate_id`,-->
            <th>S No.</th>
            <th>Blog Title</th>
            <th>Blog Sub-title</th>
            <th>Thumbnail</th>
            <th>Content</th>
            <th>User </th>
            <th>Status</th>
            <th>Status-Remark</th>
            <th>Category</th>
            <th>Created</th>
            <th style="width:30px;"></th>
          </tr>
          
        </thead>
         <tbody>
        <?php
            if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "delete from blog where blog_id = '$id'";
    mysqli_query($conn,$query);
    
            }
            ?>
       
            <?php
//            SELECT user_details.name,category.cate_name,blog.blog_id,blog.blog_title,blog.thumbnail  FROM `blog` JOIN user_details on user_details.user_id=blog.user_id JOIN category on blog.cate_id=category.cate_id
          //  $query=" select * from blog";
            $query1="SELECT blog.blog_title , blog.blog_subtitle , blog.thumbnail , blog.content , blog.created , blog.status , blog.status_remark , blog.created , user_details.user_id , user_details.name , category.cate_id , category.cate_name , blog.blog_id , blog.blog_title FROM user_details , category , blog WHERE user_details.user_id = blog.user_id && category.cate_id = blog.cate_id ORDER BY blog.blog_id";
         //  $select_data= mysqli_query($conn, $query);
           $select_data1= mysqli_query($conn, $query1);
           $count =0;
            while ($row = mysqli_fetch_array($select_data1)) {
                //$row1 = mysql_fetch_array($select_data1);
                $count++;
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
                      ?>
          
          <tr>
            <!--<td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>-->
              <td><?php echo $count;?></td>
               <td><?php echo $blog_title;?></td>
                <td><?php echo $blog_subtitle;?></td>
                <td><img src="./images/<?php echo $thumbnail;?>" width="80" height="80"></td>
                  <td><?php echo $content;?></td>
                   <td><?php echo $user;?></td>
                   <td><?php echo $status;?></td>
                   <td><?php echo $status_remark;?></td>
                   <td><?php echo $cate;?></td>
                    <td><?php echo $created;?></td>
            <td>
                <a href="poststatus.php?id=<?php echo $row['blog_id'];?>"><span class="glyphicon glyphicon-sort"></span></a>
                <a href="post_list.php?id=<?php echo $row['blog_id'];?>">
                  <i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
           <?php
            }
            ?>
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
</section>
 <!-- footer -->
		<?php include './include/footer.php';?>  <!-- / footer -->
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
