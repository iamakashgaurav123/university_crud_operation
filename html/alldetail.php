<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="../css/alldetail.css">
</head>

<body >

    <!-- Including alldetailphp.php -->
    <?php

    include('../php/alldetailphp.php');
    

    ?>

    <div class="container">
        <a href="insertpage.php" id="insert">Insert Details</a>
        <h1>Student Details</h1>
        <table>
            <tbody>
                <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Father's Name</th>
                    <th>Mother's Name</th>
                    <th>Course</th>
                    <th>Aadhaar Number</th>
                    <th>Action</th>
                    <th>Date</th>
                </tr>


                <?php
                
                $all_data = "SELECT * FROM `student_data`";
                $all_data_query = mysqli_query($db_connect, $all_data);

                while ($result = mysqli_fetch_array($all_data_query)) {
                ?>
                    <tr>
                        <td id="td_data"><?php echo $result['id'] ?></td>
                        <td><?php echo $result['st_name'] ?></td>
                        <td><?php echo $result['st_f_name'] ?></td>
                        <td><?php echo $result['st_m_name'] ?></td>
                        <td><?php echo $result['st_course'] ?></td>
                        <td id="ad_number"><?php echo $result['st_aadhaar'] ?></td>
                        <td><a href="update.php?u_id=<?php echo $result['id'] ?>" id="update_btn">Update</a><a href="alldetail.php?id=<?php echo $result['id'] ?>" id="del_btn">Delete</a></td>
                        <td><?php echo $result['date'] ?></td>
                    </tr>
                    <?php

                    ?>
                <?php

                }
                
        
                ?>
                


            </tbody>
        </table>
    </div>
    </div>
</body>

</html>