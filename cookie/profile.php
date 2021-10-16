<?php
if(isset($_COOKIE['userCookie'])){
    $user = $_COOKIE['userCookie'];
    echo "Welcome, $user <a href='logout.php'>Logout</a>";
}
else{
    header("location:login.php");
}
?>