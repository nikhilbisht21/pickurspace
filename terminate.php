<?
session_start();

session_destroy();
setcookie('userid','',time() -3600);
setcookie('err',"Login to continue",time() +30);
header('location:signin.php');

?>