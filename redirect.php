<?
session_start();

if($_SESSION['process']==6)
{header('location:redirect.2.php');}
else
if($_SESSION['process']==5)
{header('location:redirect.22.php');}


include('engine/main/red1.php');


?>