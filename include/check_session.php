<?php
session_start();
    
           
            
if($_SESSION['user_id'] != '' &&  $_SESSION['user_role'] != '' && $_SESSION['status'] != '')
{
    
}
 else {
    echo "<script>window.location.href='../index.php';</script>";
}
?>
