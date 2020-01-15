<?php
$host="localhost";
        $user="root";
        $password="";
        $database="myblog1";
$conn= mysqli_connect($host, $user, $password, $database);

if(!$_GET['cate_id']){
        die('QUERY FAILED'.mysqli_error($conn));
    }
    else
    {
    
        echo 'success';    
    }

if(isset($_GET['cate_id'])){
    $id = $_GET['cate_id'];
    $query = "delete from category where cate_id = '$id'";
    $delete_data = mysqli_query($conn,$query);
    header("location:category_list.php");

}
?>