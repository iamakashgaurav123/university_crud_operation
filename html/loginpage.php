<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/loginpage.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Login</title>
</head>

<body>



    <div class="container">
        <div class="bgimg">
            <img src="../images/loginbg.svg" alt="">
        </div>
        <div class="bgimg2">
            <img src="../images/loginbg2.svg" alt="">
        </div>
        <div class="newregistration">
            <a href="reg.php">New Here? Signup Now</a>
        </div>
        <form action="../php/loginpagephp.php" method="POST">
            <img src="../images/avatar.svg" alt="">
            <!-- <h4>Login</h4> -->
            <input type="text" required placeholder="Username" name="username">
            <input type="password" required placeholder="Password" name="password">
            <button name="login">Login</button>
        </form>


    

    </div>
</body>

</html>