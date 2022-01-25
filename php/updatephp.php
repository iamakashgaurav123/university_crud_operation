<?php

// Including DB

include('dbcon.php');

// Including alldetail.php

include('../php/alldetailphp.php');
$u_id = $_SESSION['update_id'];


// Restriction For Unauthorised Access

if(isset($_SESSION['admin_name'])){

   


    if(isset($_REQUEST['submit'])){


        // echo $_REQUEST['u_st_name'];
    // Fetching Updated Entered Data

    $updated_name = $_REQUEST['u_st_name'];
    $updated_f_name = $_REQUEST['u_f_name'];
    $updated_m_name = $_REQUEST['u_m_name'];
    $updated_aadhaar_number =$_REQUEST['u_aadhaar'];
    $updated_phone =$_REQUEST['u_s_phone'];


    // Assigning Updated Data
    $update = "UPDATE `student_data` SET `st_name`='$updated_name',`st_f_name`='$updated_f_name',`st_m_name`='$updated_m_name',`st_phone`='$updated_phone',`st_aadhaar`='$updated_aadhaar_number' WHERE `id` = $u_id";
    $update_query = mysqli_query($db_connect,$update);


    header('location:../html/alldetail.php');

    }
        
}


else{

    header('location:../html/loginpage.php');
    die();
}
