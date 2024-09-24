<?php
//include db connection file
session_start();
include('connectToDb.php');

$username = $_POST['username'];
$password = $_POST['password'];

$pass= md5($password);

$sql="SELECT * from users where username='$username' && password='$pass';";
$result= mysqli_query($conn,$sql);
if($result->num_rows>0){
    $data= $result->fetch_assoc();
    $_SESSION['uid']=$data['id'];
    $_SESSION['username']=$data['username'];
    $_SESSION['email']=$data['email'];
    $_SESSION['is_login'] = true;
    header('Location: dashboard.php');
}
else{
    $_SESSION['error']='Invalid Username or password';
    header('Location: index.php');
}
?>