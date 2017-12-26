<?php
session_start();

if(isset($_SESSION['id']))
header('location:result.php');

if(isset($_COOKIE['userid']))
{$_SESSION['process']=4;
header('location:pack.php');}
else
{setcookie('err',"You must login first",time() +30);
$_SESSION['process']=4;
header('location:signin.php');}

?>