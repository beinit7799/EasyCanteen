<?php
    session_start();
    if(isset($_SESSION['is_login'])){
        header("Location: dashboard.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://ik.imagekit.io/dzz/easycanteen/tr:w-300/favicon6_eM5tu2jRD.png?ik-sdk-version=javascript-1.4.3&updatedAt=1658767361635">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="index.css">
    <title>Easy Canteen</title>
</head>
<body>
    <div class="wrapper">
        <div class="front-banner">
            <img src="https://ik.imagekit.io/dzz/easycanteen/tr:w-600/logo_CYI5nkEOi.png?ik-sdk-version=javascript-1.4.3&updatedAt=1654571525480" class="logo">
            <p>No more boring queues</p>
        </div>
        <div class="container">
            <div class="form-section">
                <p class="main-text theme-text">Login to your account</p>
                <p class="sub-text">Thank you for choosing<br>Easy Canteen</p>
                <div class="form-wrapper">
                    
                    <form method="POST" action="loginProcess.php">
                        <label for="username" class="label-text theme-text">Username</label>
                        <input type="text" name="username" id="username" placeholder="Username">

                        <label for="password" class="label-text theme-text">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password">
                        <p class="err"><?php if(isset($_SESSION['error'])){ echo $_SESSION['error'];}?></p>

                        <!-- <p class="remember-me"><input type="checkbox" name="rememberMe" id="rememberMe">&nbsp;Remember Me</p> -->
                        <div class="form-buttons">
                            <input type="submit" name="submitBtn" id="submitBtn" value="SIGN IN">
                        </div>
                        <p class="sign-up-prompt">Dont have an account yet?<a href="registerPage.php" class="sign-up theme-text">Sign Up.</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="form-footer">
        <p>Copyright @2022</p>
    </div> -->
</body>
</html>