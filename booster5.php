<?
session_start();

$_SESSION['process']=5;
$_SESSION['step']=11;

include('engine/main/boost6.php');
header('location:detail11.php');

?>