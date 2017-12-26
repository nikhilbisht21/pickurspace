<?php 
session_start();

$_SESSION['addid']=$_POST['addid'];

header('location:getter.php');


?>