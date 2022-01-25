<?php


// Including DB Connection
include('dbcon.php');

session_start();


// Restriciton For Unauthorised Access

if(isset($_SESSION['admin_name'])){
    $admin_name = $_SESSION['admin_name'];

    

    if(isset($_REQUEST['submit'])){

    // Fetching Entered Student Details 
    $st_name = mysqli_real_escape_string($db_connect, $_REQUEST['student_name']);
    $st_f_name = mysqli_real_escape_string($db_connect, $_REQUEST['f_name']);
    $st_m_name = mysqli_real_escape_string($db_connect, $_REQUEST['m_name']);
    $st_email = mysqli_real_escape_string($db_connect, $_REQUEST['student_email']);
    $st_phone = mysqli_real_escape_string($db_connect, $_REQUEST['student_phone']);
    $st_aadhaar = mysqli_real_escape_string($db_connect, $_REQUEST['student_aadhaar']);
    $st_course = mysqli_real_escape_string($db_connect, $_REQUEST['course']);


    // selecting aadhaar number for resubmission

    $db_aadhaar = "select * from `student_data` where `st_aadhaar` = '$st_aadhaar'";
    $db_aadhaar_query = mysqli_query($db_connect,$db_aadhaar);
    $db_aadhaar_count = mysqli_num_rows($db_aadhaar_query);

    if($db_aadhaar_count>0){
        echo "Student Already Exist";
    }

    else{
    // Assigning Data's Into DB

    $assign_data = "INSERT INTO `student_data`(`st_name`, `st_f_name`, `st_m_name`,`st_email`, `st_phone`, `st_aadhaar`, `st_course`) VALUES ('$st_name', '$st_f_name', '$st_m_name', '$st_email', '$st_phone','$st_aadhaar','$st_course')";
    $assign_data_query =  mysqli_query($db_connect,$assign_data);

    header('location:../html/insertpage.php');

    
    }
}


}

else{
    header('location:../html/loginpage.php');
    die();
}

?>