<?php
session_start();
if(isset($_COOKIE['userCookie'])){
    $_SESSION['userSession'] = $user;
    header("location:profile.php");
}
elseif(isset($_SESSION['userSession'])){
    header("location:profile.php");
}
elseif(isset($_POST['subLogin'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if($user == null || $pass == null){
        echo "Please, complete your data.";
        include_once("login.html");
        exit;
    }
    else{
        $_SESSION['userSession'] = $user;
        header("location:profile.php");
    }
}
else{
    include_once("login.html");
}
?>