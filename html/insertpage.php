<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/insertpage.css">

    <title>Admin Portal Insertion</title>
</head>

<body >

<style>
    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

.container form input[type="radio"]{
    margin-top: -2em;
}

.container form input{
    margin-top: -.5em;
}

.welcometext{
    margin-bottom: -.5em;
}
.pagename{
    margin-bottom: 2em;
    
}

.container form button{
    border-bottom: .5px solid red;
    margin-top: -2.3em;
    transition: .5s;
}

.container form button:hover{
    border-bottom: .5px solid black;
    transition: .5s;
}
</style>

<?php
include('../php/insertpagephp.php');

?>

    <div class="container">
        <a href="../php/logout.php" style="position:absolute; right:2em; color:black; text-decoration:none; top:.5em; background-color:red; border-radius:4px; border:none; padding:.2em .4em; color:white;">LogOut</a>
       <a href="alldetail.php" style="position:absolute; text-decoration:none; border:none; padding:.2em .4em; background-color:greenyellow; border-radius:4px; top:1%; left:1%; color:black; box-shadow:greenyellow 0px 0px 10px;">View Data</a>
        <div class="welcometext">
            <h4 style="color: black; text-shadow:black 0px 0px 2px;">Welcome <?php echo $admin_name ?></h4>
        </div>

        <div class="pagename">
            <h5>Student Details</h5>
        </div>
        <div class="bg_img">
            <img src="../images/studentdetails.svg" alt="">
        </div>
        <div class="bg_img2">
            <!-- <img src="../images/studentdetails2.svg" alt=""> -->
        </div>
        <form action="../php/insertpagephp.php" method="POST">
            <input type="text" name="student_name" placeholder="Student Name" required>
            <input type="text" name="f_name" placeholder="Father's Name" required>
            <input type="text" name="m_name" placeholder="Mother's Name" required>
            <input type="email" name="student_email" placeholder="Email (optional)">
            <input type="tel" minlength="10" maxlength="10" name="student_phone" placeholder="Phone" required>
            <input type="tel" minlength="12" maxlength="12" name="student_aadhaar" placeholder="Aadhaar Number" required>
            <div class="course">
                <input type="radio" style="accent-color:red;" name="course" class="course_design" value="B.Tech" required> B.Tech
                <input type="radio"  style="accent-color:red; " name="course" class="course_design" value="Diploma" required> Diploma
            </div>
            <button name="submit" style="cursor: pointer; color:red;">Submit</button>
        </form>


    </div>

</body>

</html>