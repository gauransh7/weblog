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
      CATEGORY - LIST
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
            <th>Category name</th>
            <th>Category Disc</th>
            <th>Sort Order</th>
            <th>Status</th>
            <th>Date</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            <?php
            if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "delete from category where cate_id = '$id'";
    $delete_data = mysqli_query($conn,$query);
    
    if(!delete_data){
        die('QUERY FAILED'.mysqli_error($conn));
    }
    else
    {
    
        echo 'success';    
    }
            }

            
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
          
          <tr>
            <!--<td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>-->
              <td><?php echo $count;?></td>
               <td><?php echo $cate_name;?></td>
                <td><?php echo $cate_des;?></td>
                 <td><?php echo $sort_order;?></td>
                  <td><?php echo $status;?></td>
                   <td><?php echo $created;?></td>
            <td>
                <a href="catestatus.php?id=<?php echo $row['cate_id'];?>">
                  <span class="glyphicon glyphicon-sort"></span></a>
                <a href="catedit.php?id=<?php echo $row['cate_id'];?>"><i class="fa fa-pencil text-success text-active"></i></a>
                <a href="category_list.php?id=<?php echo $row['cate_id'];?>">
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
