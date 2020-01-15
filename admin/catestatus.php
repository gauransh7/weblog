<?php
$host="localhost";
        $user="root";
        $password="";
        $database="myblog1";
$conn= mysqli_connect($host, $user, $password, $database);


if(isset($_GET['id'])){
    $sid = $_GET['id'];
    $query = "select * from category where cate_id = '$sid'";
            $select_data1 = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($select_data1);
if($row['status']==1){
$query = "UPDATE `category` SET `status`='0' WHERE cate_id='$sid'"; 
$select_data = mysqli_query($conn, $query);
 if(!$select_data){
        die('QUERY FAILED'.mysqli_error($conn));
    }
    else
    {
    
        echo 'success';    
    }
}
 else 
    
 {
     $query = "UPDATE `category` SET `status`='1' WHERE cate_id='$sid'"; 
     $select_data = mysqli_query($conn, $query);
      if(!$select_data){
        die('QUERY FAILED'.mysqli_error($conn));
    }
    else
    {
    
        echo 'success';    
    }
 }
}
 header("location:category_list.php")
?>