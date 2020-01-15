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
      USER - DETAILS
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
            <th>User name</th>
            <th>User Mobile</th>
            <th>Status</th>
            <th>Date</th>
            <th>Last Login</th>
            <th>Last update</th>
            <th>Email ID</th>
            <th>Password</th>
            <th>User Role</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            <?php
            $query=" select * from user_details";
           $select_data= mysqli_query($conn, $query);
           $count =0;
            while ($row = mysqli_fetch_array($select_data)) {
                $count++;
               $user_name = $row['name'];
               $user_mob = $row['mobile_no'];
               $user_password = $row['password'];
               $user_status = $row['status'];
               $user_created = $row['created'];
               $user_last_login = $row['last_login'];
               $user_profile_update = $row['profile_update'];
               $user_email_id = $row['email_id'];
               $user_user_role = $row['user_role'];
                      ?>
          
          <tr>
            <!--<td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>-->
              <td><?php echo $count;?></td>
               <td><?php echo $user_name;?></td>
                <td><?php echo $user_mob;?></td>
                 <td><?php echo $user_status;?></td>
                  <td><?php echo $user_created;?></td>
                   <td><?php echo $user_last_login;?></td>
                   <td><?php echo $user_profile_update;?></td>
                   <td><?php echo $user_email_id;?></td>
                   <td><?php echo $user_password;?></td>
                   <td><?php echo $user_user_role;?></td>
            <td>
                <a href="" class="active" ui-toggle-class=""><i class="fa fa-pencil text-success text-active"></i></a>
                    <a href="" class="active" ui-toggle-class="">
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
