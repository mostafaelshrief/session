<?php
session_start();
session_unset();
session_destroy();
setcookie('userCookie',$user,time()-1);
header("location:login.php");
exit;
?>