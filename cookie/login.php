<?php
if(isset($_COOKIE['userCookie'])){
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
        if(isset($_POST['remMe'])){
            setcookie('userCookie',$user,time()+60*60*24*30);
        }
        header("location:profile.php");
    }
}
else{
    include_once("login.html");
}
?>