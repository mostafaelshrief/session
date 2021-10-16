<?php
setcookie('userCookie',$user,time()-1);
header("location:login.php");
?>