<?php

    $err= $usernameErr = $emailErr = $passwordErr= $confirmPasswordErr= "";
    $username = $email = $password ='';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["username"])) {
            $usernameErr = "username is required";
            $err=1;
        }
        else {
            if(preg_match("/^[a-zA-Z0-9]{6,255}$/",$_POST['username'])!=0){
                $username = test_input($_POST["username"]);
            }else{
                $usernameErr = "Username must be atleast 6 charaters long.";
                $err=1;
            }
        }
    
        if(empty($_POST["email"])) {
            $emailErr = "Email is required";
            $err=1;
        }
        else { 
            if(preg_match("/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]{2,10}$/",$_POST['email'])!=0){
                $email = test_input($_POST['email']);
            }
            else{
                $emailErr = "Invalid email format";
                $err=1;
            }
        }
    
        if(empty($_POST["password"]) or empty($_POST["confirmPassword"])) {
            $passwordErr = "Password is required";
            $confirmPasswordErr = "Password is required";
            $err=1;
        }
        elseif($_POST['password'] != $_POST['confirmPassword']){
            $confirmPasswordErr= 'Password donot match';
            $err=1;
        }
        else{
            if(preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/",$_POST['password'])!=0){
                $password= md5($_POST['password']);
            }
            else{
                $passwordErr = "Password must be 8 characters long and must contain a digit and a uppercase alphabet";
                $err=1;
            }
        }
    
        if($err!=1) {
            include('registerProcess.php');
        }
    
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
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
                <p class="main-text theme-text">Create a new account</p>
                <p class="sub-text">Thank you for choosing<br>Easy Canteen</p>
                <div class="form-wrapper">
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                        <label for="username" class="label-text theme-text">Username</label>
                        <input type="text" name="username" id="username" placeholder="Username">
                        <p class="err"><?php echo $usernameErr?></p>

                        <label for="email" class="label-text theme-text">Email</label>
                        <input type="text" name="email" id="email" placeholder="Email">
                        <p class="err"><?php echo $emailErr?></p>
                        
                        <label for="password" class="label-text theme-text">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password">
                        <p class="err"><?php echo $passwordErr?></p>

                        <label for="confirmPassword" class="label-text theme-text">Confirm Password</label>
                        <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password">
                        <p class="err"><?php echo $confirmPasswordErr?></p>

                        <div class="form-buttons">
                            <input type="submit" name="submitBtn" id="submitBtn" value="SIGN UP" style="margin-top:10%;">
                        </div>
                        <p class="sign-in-prompt">Already have an account?<br><a href="index.php" class="sign-in theme-text">Sign in.</a></p>
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