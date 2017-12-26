<?php
session_start();

$_SESSION['process']=6;
$_SESSION['step']=1;

include('engine/main/boost6.php');

header('location:detail1.php');

?>