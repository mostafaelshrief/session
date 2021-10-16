<?php
session_start();
if(isset($_SESSION['userSession'])){
    $user = $_SESSION['userSession'];
    echo "Welcome, $user <a href='logout.php'>Logout</a>";
}
else{
    header("location:login.php");
}
?>