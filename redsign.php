<?php
session_start();

$_SESSION['step']=1;
header('location:signup.php');

?>