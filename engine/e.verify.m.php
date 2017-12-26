<?php
session_start();

$page="temp1";

if(!empty($_POST['verify']))
{


if(empty($_POST['ver']))
$err1="Enter verification code";


if(!empty($_POST['ver']))
{

include('engine/main/check.verify.m.php');

}

}


?>