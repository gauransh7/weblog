<?php 
    
if(isset($_GET['id'])){
    $sid = $_GET['id'];
    $query1="SELECT blog.blog_title , blog.blog_subtitle , blog.thumbnail , blog.content , blog.created , blog.status , blog.status_remark , blog.created , user_details.user_id , user_details.name , category.cate_id , category.cate_name , blog.blog_id , blog.blog_title FROM user_details , category , blog WHERE user_details.user_id = blog.user_id && category.cate_id = blog.cate_id && blog_id = '$sid'";
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
            

}
?>