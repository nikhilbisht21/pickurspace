<?php
session_start();

$check=0;

if($_POST['nxt2']=='Next')
{

if(empty($_POST['i_am']))
$err1="Field can't be left blank";
else
++$check;

if(empty($_POST['space']))
$err2="Field can't be left blank";
else
++$check;

if(empty($_POST['area']))
$err3="Fields can't be left blank";
else
if(ereg('[a-zA-Z]', $_POST['area']))
{
$len=strlen($_POST['area']);

if($len>'25')
{$err3="Character limit exceeded";}
else
{
++$check;}
}
else
$err3="Only alphabetic characters are allowed ";


if(empty($_POST['city']))
$err7="Fields can't be left blank";
else
if(ereg('[a-zA-Z]', $_POST['city']))
{
$len=strlen($_POST['city']);

if($len>'25')
{$err7="Character limit exceeded";}
else
{
++$check;}
}
else
$err7="Only alphabetic characters are allowed ";


if(empty($_POST['state']))
$err8="Fields can't be left blank";
else
if(ereg('[a-zA-Z]', $_POST['state']))
{
$len=strlen($_POST['state']);

if($len>'25')
{$err8="Character limit exceeded";}
else
{
++$check;}
}
else
$err8="Only alphabetic characters are allowed ";


if(empty($_POST['budget']))
$err4="Field can't be left blank";
else
if(ereg('[^a-zA-Z]', $_POST['budget']))
{

if($_POST['budget']<500)
{$err4="Price not acceptable";
}
if($_POST['budget']>1000000)
{$err4="Price limit exceeded";}
else
{
++$check;}
}
else
$err4="Only numeric characters are allowed";

if(empty($_POST['mxdd'])||empty($_POST['mxmm'])||empty($_POST['mxyy']))
$err5="Field can't be left blank";
else
{if($_POST['mxyy']<$_POST['mnyy'])
$err5="Enter a valid date";
else
++$check;
}


if(empty($_POST['mndd'])||empty($_POST['mnmm'])||empty($_POST['mnyy']))
$err6="Field can't be left blank";
else
{if($_POST['mxyy']<$_POST['mnyy'])
$err5="Enter a valid date";
else
++$check;
}




if($check==8)
{

$mxt=$_POST['mxdd'].",".$_POST['mxmm'].",".$_POST['mxyy'];
$mnt=$_POST['mndd'].",".$_POST['mnmm'].",".$_POST['mnyy'];

setcookie('space',$_POST['space']);
setcookie('gkitch',$_POST['gkitch']);
setcookie('im',$_POST['i_am']);
setcookie('area',$_POST['area']);
setcookie('city',$_POST['city']);
setcookie('state',$_POST['state']);
setcookie('bdg',$_POST['budget']);
setcookie('mxt',$mxt);
setcookie('mnt',$mnt);

$_SESSION['step']=22;
header('location:detail22.php');
}
           }


?>