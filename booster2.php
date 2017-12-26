<?php
session_start();

$_SESSION['process']=2;
setcookie('err',"You must login first",time() +30);
header('location:signin.php');

?>