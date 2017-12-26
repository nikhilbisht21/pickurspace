<?
session_start();

$_SESSION['process']=3;
setcookie('err',"You must login first",time() +30);
header('location:signin.php');

?>