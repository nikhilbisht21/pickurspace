<?php
session_start();

$_SESSION['pid']=$_POST['pid'];
header('location:ocal.php');


?>