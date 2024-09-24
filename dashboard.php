<?php 
    session_start();
    if(!$_SESSION['is_login']){
        header("Location: index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://ik.imagekit.io/dzz/easycanteen/tr:w-300/favicon6_eM5tu2jRD.png?ik-sdk-version=javascript-1.4.3&updatedAt=1658767361635">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard</title>
</head>
<body>
    <div class="user-profile">
        <i class="fa-solid fa-circle-user profile-picture green-text"></i>
        <p class="uName"><?php echo $_SESSION['username']?></p>
        <p class="uEmail"><?php echo $_SESSION['email']?></p>
        <i class="fa-solid fa-xmark green-text fa-2x user-profile-close-btn"></i>
        <form method="POST" action="logout.php">
            <input type="submit" class="logout-btn" value="Log Out"></input>
        </form>
    </div>
    <div class="header">
        <img src="https://ik.imagekit.io/dzz/tr:w-300/easycanteen/logo_CYI5nkEOi.png?ik-sdk-version=javascript-1.4.3&updatedAt=1654571525480" alt="logo" class="logo">
        <div class="icons">
            <a href="items/cart.php"><span class="green-text"><i class="fa-solid fa-cart-shopping cart-icon"><div class="cart-indicator">0</div></i></span></a>
            <span class="green-text"><i class="fa-solid fa-user user-icon"></i></span>
        </div>
    </div>

    <div class="container">
        <div class="top">
            <div class="slider">
                <img name="slideImg">
                <div class="arrows">
                    <div class="left-arrow"><i class="fa-solid fa-angle-left icons"></i></div>
                    <div class="right-arrow"><i class="fa-solid fa-angle-right icons"></i></div>
                </div>
            </div>
            <div class="wrap-top">
                <a href="#fav-section">
                <div class="welcome-banner">
                    <p class="welcome-text">Hello, <span class="green-text"><?php echo $_SESSION['username'];?></span></p>
                    <p class="welcome-subtext">Are you hungry?</p>
                </div>
                </a>
                
                <div class="payment-banner">
                    <p>Add a <span class="green-text"><br>payment method</span></p>
                    <img src="https://ik.imagekit.io/dzz/easycanteen/tr:w-300/undraw_make_it_rain_iwk4_oUPw-O5yk.svg?ik-sdk-version=javascript-1.4.3&updatedAt=1654571525520" alt="credit card">
                </div>
            </div>
        </div>
        
        <div class="fav-section" id="fav-section">
            <p>Most Popular</p>
            <div class="fav-cards">
                <a href="items/daalBhat.php"><div class="fav-card" id="daal-bhat"><img src="https://ik.imagekit.io/dzz/easycanteen/tr:w-200/dal-bhat-recipe-local-food-260nw-583966321_WdRXfgEjs.png?ik-sdk-version=javascript-1.4.3&updatedAt=1654779704877" alt="Rice"><p>Daal Bhat<span class="rating4"></span></p></div></a>
                <a href="items/samosa.php"><div class="fav-card"><img src="https://ik.imagekit.io/dzz/easycanteen/tr:w-300/kabir-cheema-8T9AVksyt7s-unsplash_Fs62hdFvv.jpg?ik-sdk-version=javascript-1.4.3&updatedAt=1654776222643" alt="Samosa"><p>Samosa<span class="rating3"></span></p></div></a>
                <a href="items/chowmein.php"><div class="fav-card"><img src="https://ik.imagekit.io/dzz/easycanteen/tr:w-300/5bd3a3027c65045b93886002d2c788bf_Ky1WH6gLe.jpg?ik-sdk-version=javascript-1.4.3&updatedAt=1654776367355" alt="Chowmein"><p>Chowmein<span class="rating2"></span></p></div></a>
            </div>
        </div>
        <div class="stats-banner">
            <div class="stat">
                <i class="fa fa-solid fa-user"></i>
                <p>Over 100<br>Monthly users</p>
            </div>
            <div class="stat">
                <i class="fa fa-solid fa-utensils"></i>
                <p>Over 20<br>Food items</p>
            </div>
            
        </div>
        <div class="menu-section">
            <p>Menu</p>
            <div class="menu-cards">
                <a href="items/daalBhat.php"><div class="menu-card" id="daal-bhat"><img src="https://ik.imagekit.io/dzz/easycanteen/tr:w-200/dal-bhat-recipe-local-food-260nw-583966321_WdRXfgEjs.png?ik-sdk-version=javascript-1.4.3&updatedAt=1654779704877" alt="Rice"><p>Daal Bhat<span class="rating4"></span></p></div></a>
                <a href="items/samosa.php"><div class="menu-card"><img src="https://ik.imagekit.io/dzz/easycanteen/tr:w-200/kabir-cheema-8T9AVksyt7s-unsplash_Fs62hdFvv.jpg?ik-sdk-version=javascript-1.4.3&updatedAt=1654776222643" alt="Samosa"><p>Samosa<span class="rating4"></span></p></div></a>
                <a href="items/chowmein.php"><div class="menu-card"><img src="https://ik.imagekit.io/dzz/easycanteen/tr:w-200/5bd3a3027c65045b93886002d2c788bf_Ky1WH6gLe.jpg?ik-sdk-version=javascript-1.4.3&updatedAt=1654776367355" alt="Chowmein"><p>Chowmein<span class="rating2"></span></p></div></a>
                <a href="items/momo.php"><div class="menu-card"><img src="https://ik.imagekit.io/dzz/easycanteen/tr:w-200/tek-bahadur-bj07uo3SnhM-unsplash_Gwuj-RbcWj.jpg?ik-sdk-version=javascript-1.4.3&updatedAt=1654776280913" alt="momo"><p>Momo<span class="rating4"></span></p></div></a>
                <a href="items/friedRice.php"><div class="menu-card"><img src="https://ik.imagekit.io/dzz/easycanteen/tr:w-200/annie-spratt-oT7_v-I0hHg-unsplash_nTj6bMK_A.jpg?ik-sdk-version=javascript-1.4.3&updatedAt=1654776222920" alt="fried-rice"><p>Fried Rice<span class="rating4"></span></p></div></a>
                <div class="menu-card"></div>
                <div class="menu-card"></div>
                <div class="menu-card"></div>
                <div class="menu-card"></div>
                <div class="menu-card"></div>
            
            </div>
        </div>
        <div class="services-banner-title">What we offer</div>
        <div class="services-banner">
            <div class="service">
                <img src="https://ik.imagekit.io/dzz/easycanteen/tr:w-300/undraw_wait_in_line_o2aq_zDuRIoVyL7.svg?ik-sdk-version=javascript-1.4.3&updatedAt=1654782465114" alt="Queue">
                <p><span class="title-text">Carefree food order</span><p>
                <p>Not only you can skip the queue for a coupon, you can pre-purchase a coupon</p>
            </div>
            <div class="service">
                <img src="https://ik.imagekit.io/dzz/easycanteen/tr:w-300/undraw_mobile_pay_re_sjb8_8xcGfGJsC.svg?ik-sdk-version=javascript-1.4.3&updatedAt=1654782464885" alt="Mobile Payment">
                <p><span class="title-text">Cashless Transactions</span></p>
                <p class="text">No cash? No problem, We've got your back with online payment</p>
            </div>
        </div>
    </div>
    <div class="form-footer">
        <p>Copyright @2022</p>
    </div>
    <script src="dashboard.js"></script>
</body>
</html>