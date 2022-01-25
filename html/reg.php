<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reg.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <?php include('../php/regphp.php') ?>

    <div class="container">
        <div class="bgimg">
            <img src="../images/regbg.svg" alt="">
        </div>
        <div class="bgimg2">
            <img src="../images/regbg2.svg" alt="">
        </div>
        <form action="../php/regphp.php" method="POST">
            <h4 style="font-weight: bold;">Create Account</h4>
            <input type="text" required placeholder="Name" name="name" >
            <input type="email" required placeholder="Email" name="admin_email" >
            <input type="password" required placeholder="Password" name="admin_password" >
            <input type="password" required placeholder="Confirm Password" name="admin_c_password" >
            <button name="submit" style="color: red;">Submit</button>
            <a href="loginpage.php">Already have an account? Log in</a>
        </form>
    </div>
</body>

</html>