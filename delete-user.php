<?php
    include('config.php');

    $id = $_GET['id'];
    $query= "DELETE FROM `users` where `user_id` = '$id'";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        header('location:user_list.php');

    }
    else{
        echo "<script>alert('Error : ".mysqli_error($conn)."');</script>";
    }
?>