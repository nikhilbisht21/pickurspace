<?php
session_start();






include('engine/main/fetch.acc.php');


if(isset($_COOKIE['userid']))
{
if($_SESSION['process']==6)
{$_SESSION['step']=1;
header('location:detail1.php');}
else
if($_SESSION['process']==6&&$_SESSION['step']!=1)
{$_SESSION['step']=11;
header('location:usradds.php');}
else
if($_SESSION['process']==5&&$_SESSION['step']!=11)
{$_SESSION['step']=11;
header('location:usradds.php');}
else
if($_SESSION['process']==5)
{$_SESSION['step']=11;
header('location:detail11.php');}
else
if($_SESSION['process']==4)
{header('location:pack.php');}
else
if($_SESSION['process']==2||$_SESSION['process']==3)
{header('location:usradds.php');}
else
{header('location:usrhome.php');}

}
else
if($_SESSION['process']==91)
header('location:getter.php');
else
header('location:fetch.php');


//

?>