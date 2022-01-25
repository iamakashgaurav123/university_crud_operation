<?php

// Including dbcon.php

include('dbcon.php');



if(isset($_REQUEST['login'])){


    // Fetching Entered Data's

    $entered_username = mysqli_real_escape_string($db_connect,$_REQUEST['username']);
    $entered_password = mysqli_real_escape_string($db_connect,$_REQUEST['password']);

    // Verifying Username / Admin Email
    $db_email = "select * from admin_data where `admin_email` = '$entered_username'";
    $db_email_query = mysqli_query($db_connect,$db_email);
    $db_email_count = mysqli_num_rows($db_email_query);


    if($db_email_count===1){
        // Fetching Email For The Associative Email

        $assoc_pass = mysqli_fetch_assoc($db_email_query);
        $pass=  $assoc_pass['admin_password'];

        // Verifying Our Password With Users Entered Password
        $decode_pass = password_verify($entered_password, $pass);

        if($decode_pass===true){
            // Fetching Admin Name For Welcome Messaging
            session_start();
            $_SESSION['admin_name'] = $assoc_pass['admin_name'];
            
            header('location:../html/insertpage.php');
            
        }
        else{
            echo "Check Email or Password";
            // header('location:../html/loginpage.php');
        }

    }

    else{
        echo "Check Email or Password";
        // header('location:../html/loginpage.php');
    }

}


?>