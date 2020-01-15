 <?php
$host="localhost";
        $user="root";
        $password="";
        $database="myblog1";
$conn= mysqli_connect($host, $user, $password, $database);

 include './include/head.php';
 include './include/header.php';
 include './include/menu.php';
 include '../include/db.php';
 session_start();
 
 $fid = $_SESSION['user_id'];
            $query=" select * from user_details where user_id ='$fid'";
           $select_data= mysqli_query($conn, $query);
         /*   if(!$select_data){
        die('QUERY FAILED'.mysqli_error($conn));
    }
    else
    {
    
        echo 'success';    
    }*/?>

<html>
    <body>

            $row = mysqli_fetch_array($select_data);
               $user_name = $row['name'];
               $user_mob = $row['mobile_no'];
               $user_password = $row['password'];
               $user_status = $row['status'];
               $user_created = $row['created'];
               $user_last_login = $row['last_login'];
               $user_profile_update = $row['profile_update'];
               $user_email_id = $row['email_id'];
               $user_user_role = $row['user_role'];
                echo '<br>';echo '<br>';echo '<br>';echo '<br>';echo '<br>';    
               echo 'name - '; echo $user_name; echo '<br>';
                 echo 'mobile no. - '; echo $user_mob; echo '<br>';
               echo 'status - '; echo $user_status; echo '<br>';
                 echo 'date - '; echo $user_created; echo '<br>';
                 echo 'last - login - '; echo $user_last_login;echo '<br>';
                  echo 'last profile update - '; echo $user_profile_update; echo '<br>';
                  echo 'email id - ';  echo $user_email_id; echo '<br>';
                  echo 'password - '; echo $user_password; echo '<br>';
                  echo 'user role - '; echo $user_user_role; echo '<br>';
            
           
?>
            