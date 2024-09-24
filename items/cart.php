<?php
    session_start();
    if(!isset($_SESSION['is_login'])){
        header("Location: ../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://ik.imagekit.io/dzz/easycanteen/tr:w-300/favicon6_eM5tu2jRD.png?ik-sdk-version=javascript-1.4.3&updatedAt=1658767361635">
    <link rel="stylesheet" href="../dashboard.css">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cart</title>
</head>
<body>
    <div class="header">
        <a href="../dashboard.php"><img src="https://ik.imagekit.io/dzz/easycanteen/tr:w-300/logo_CYI5nkEOi.png?ik-sdk-version=javascript-1.4.3&updatedAt=1654571525480" alt="logo" class="logo"></a>
    </div>
    <div class="container">
        <div class="cart-head">
            <p class="title-text">Cart(<span class="total-items-on-cart">0</span>)</p>
        </div>

        
        <div class="cartDiv"><!-- GENERATING DIVS --></div>
        <div class="empty-cart-text"></div>
        <div class="cart-details">
            <p>In Cart : <span class="green-text">Rs. </span><span class="ttlPrc green-text">0</span></p>
            <p>Service Charge : <span class="green-text">Rs. </span><span class="sCharge green-text">0</span></p>
            <p class="hr-line"></p>
            <p>Total Amount : </span><span class="green-text">Rs. </span><span class="ttlAmt green-text">0</span></p>
        </div>
        <div><button type="button" class="checkout-btn">Checkout</div>
    </div>
    <script src="cart.js"></script>
</body>
</html>