<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/update.css">
    <title>Update</title>
</head>

<body>

    <!-- Including It's Php -->

  
    <?php

    include('../php/updatephp.php');


    ?>



    <div class="container">
        <a href="insertpage.php" id="home">Home</a>
        <a href="../php/logout.php" id="log-out">LogOut</a>
        <h1>Update</h1>
        <form action="../php/updatephp.php" method="POST">


        <?php
    // Data Retreiving For Related UPDATE ID

    $u_id = $_REQUEST['u_id'];
    $all_data = "SELECT * FROM `student_data` WHERE `id`= '$u_id'";
    $all_data_query = mysqli_query($db_connect, $all_data);
    $U_res = mysqli_fetch_array($all_data_query);

?>
        
            <input type="hidden">
            <label for="st_name">Student Name</label>
            <input type="text" id="st_name" name="u_st_name"  value="<?php echo $U_res['st_name']; ?>" required>

            <label for="st_name">Father's Name</label>
            <input type="text" name="u_f_name" value="<?php echo $U_res['st_f_name']; ?>" required>

            <label for="st_name">Mother's Name</label>
            <input type="text" name="u_m_name" value="<?php echo $U_res['st_m_name']; ?>" required>

            <label for="st_name">Phone</label>
            <input type="tel" minlength="10" maxlength="10" name="u_s_phone" value="<?php echo $U_res['st_phone']; ?>" required>

            <label for="st_name">Aadhaar Number</label>
            <input type="tel" minlength="12" maxlength="12" name="u_aadhaar" value="<?php echo $U_res['st_aadhaar']; ?>" required>
            <button name="submit">Submit</button>
        </form>
    </div>
</body>

</html>