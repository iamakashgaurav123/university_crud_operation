<?php  
// Including DB Connection
include('dbcon.php');

session_start();

if($_SESSION['admin_name']){


        // Delete Query

        if(isset($_REQUEST['id'])){

        $ids = $_REQUEST['id'];

        $del = "DELETE FROM `student_data` WHERE `id` = '$ids'";
        $del_query = mysqli_query($db_connect,$del);

}

        // Update Query
       elseif(isset($_REQUEST['u_id'])){
                $_SESSION['update_id']= $_REQUEST['u_id'];

                
        }

}

else{
        header('location:../html/loginpage.php');
        die();
}

?>