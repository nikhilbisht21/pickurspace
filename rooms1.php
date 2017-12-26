<?php
session_start();

$_SESSION['id']=$_POST['id'];
header('location:rooms.php');


?>
