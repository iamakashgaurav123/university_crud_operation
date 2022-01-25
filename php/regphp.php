<?php

// Including Connection Php
include('dbcon.php');


// Start


if(isset($_REQUEST['submit'])){
    
    // Taking Registrated Data's

    $admin_name = mysqli_real_escape_string($db_connect, $_REQUEST['name']);
    $admin_email = mysqli_real_escape_string($db_connect, $_REQUEST['admin_email']);
    $admin_password = mysqli_real_escape_string($db_connect, $_REQUEST['admin_password']);
    $admin_confirm_password = mysqli_real_escape_string($db_connect, $_REQUEST['admin_c_password']);


    // Hashing Admin Password 

    $hashed_admin_password = password_hash($admin_password,PASSWORD_BCRYPT);
    $hashed_admin_confirm_password = password_hash($admin_confirm_password,PASSWORD_BCRYPT);


    // Both Password Matching Or Not

    if($admin_password!=$admin_confirm_password){
        echo "Password Not Matching";
    }

    else{

        // Checking Reuser Registration
        $db_email = "select * from admin_data where `admin_email`= '$admin_email'";
        $db_email_query = mysqli_query($db_connect,$db_email);

        // Email Counting

        $email_count = mysqli_num_rows($db_email_query);

        if($email_count>0){
            echo "Email Already Exist";
        }

        else{
            // Assigning Admin Data Into Database

            $data_assign = "INSERT INTO `admin_data`(`admin_name`, `admin_email`, `admin_password`, `admin_confirm_password`) VALUES ('$admin_name','$admin_email','$hashed_admin_password', '$hashed_admin_confirm_password')";
            $data_assign_query = mysqli_query($db_connect,$data_assign);

            header('location:../html/loginpage.php');
        }
        
    }

}




?>