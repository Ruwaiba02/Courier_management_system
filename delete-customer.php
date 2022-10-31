<?php
    include('config.php');

    $id = $_GET['id'];
    $query= "DELETE FROM `customer_login` where `cust_id` = '$id'";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        header('location:customer_list.php');

    }
    else{
        echo "<script>alert('Error : ".mysqli_error($conn)."');</script>";
    }
?>