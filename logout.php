<?php
session_start();
unset($_SESSION["uname"]);
unset($_SESSION["email"]);
unset($_SESSION["id"]);
unset($_SESSION['is_login']);
session_destroy();
header('Location: index.php');
exit();
?>