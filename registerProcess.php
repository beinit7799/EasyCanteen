<?php
//include db connection file
include('connectToDb.php');

$sql = "INSERT INTO `users`( `username`, `email`, `password`)
        VALUES ('$username','$email','$password');";
        
if(mysqli_query($conn, $sql)){
    // echo 'Successfully Registered';
    header('Location: index.php');
    exit();
}

