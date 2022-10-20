<?php
session_start();
include('config.php');

if(isset($_SESSION["username"]))
{
    header("location: index.php");

}



?>


<!DOCTYPE html>
<html lang="zxx">
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>Management Admin</title>


<link rel="stylesheet" href="css/bootstrap1.min.css" />

<link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />
<link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />


<link rel="stylesheet" href="vendors/scroll/scrollable.css" />

<link rel="stylesheet" href="css/metisMenu.css">

<link rel="stylesheet" href="css/style1.css" />
<link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
</head>
<body class="crm_body_bg">

    <div class="col-lg-12">
        <div class="white_box mb_30" style="margin-top:40px; padding-top:80px; padding-bottom:80px;">
        <div class="row justify-content-center">
        <div class="col-lg-6">
        
        
        <div class="modal-content cs_modal">
        <div class="modal-header justify-content-center theme_bg_1">
        <h5 class="modal-title text_white">Log in</h5>
        </div>
        <div class="modal-body">

        <form method="POST">

        <div class="">
        <input type="text" class="form-control" placeholder="Enter Username" name="username">
        </div>
        <div class="">
        <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <input type="submit" style="background-color: #884ffbe6 ; color:white; padding-top:0px;" class="btn_1 full_width text-center" value="Login" name="login">
        
        
        </form>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>


        <?php

                        if(isset($_POST["login"]))
                        {

                    

                        $username = $_POST["username"];
                        $password = $_POST["password"];

                        $query = "SELECT * FROM `users` WHERE `username` = '{$username}' AND `password` = '{$password}'";

                        $result =  mysqli_query($conn,$query);

                        if(mysqli_num_rows($result)>0)
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                                

                                $_SESSION["username"] = $row["username"];
                                $_SESSION["user_id"] = $row["user_id"];
                                $_SESSION["role"] = $row["role"];

                                header("location: index.php");
                            }
                        }
                        else
                        {
                            echo "Incorrect Username/Password";
                        }


                        
                        
                    }
 ?>


<script src="js/jquery1-3.4.1.min.js"></script>

<script src="js/popper1.min.js"></script>

<script src="js/bootstrap1.min.js"></script>

<script src="js/metisMenu.js"></script>

<script src="vendors/scroll/perfect-scrollbar.min.js"></script>
<script src="vendors/scroll/scrollable-custom.js"></script>

<script src="js/custom.js"></script>
</body>
</html>