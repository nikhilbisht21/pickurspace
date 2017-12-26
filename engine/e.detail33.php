<?php
session_start();

$check=0;

if(!empty($_POST['nxt4']))
{

if(empty($_POST['uage'])&&empty($_POST['ugen']))
$err1="Fields cant be left blank";
else
{

if(ereg('[^a-zA-Z]', $_POST['uage']))
{

if($_POST['uage']<18)
{$err1="Age not acceptable";
}
if($_POST['uage']>100)
{$err2="Age limit exceeded";}
else
{
++$check;}
}
else
$err1="Only numeric characters are allowed in age field";

if(empty($_POST['ugen']))
{
$err1="Please select your gender";
}

}


if(empty($_POST['uhome']))
$err2="Field can't be left blank";
else
if(ereg('[a-zA-Z] ?[a-zA-Z]', $_POST['uhome']))
{
$len=strlen($_POST['uhome']);

if($len>'25')
{$err2="Character limit exceeded";}
else
{
++$check;}
}
else
$err2="Only alphabetic characters are allowed ";


if(empty($_POST['uoccp']))
$err3="Field can't be left blank";
else
if(ereg('[a-zA-Z] ?[a-zA-Z]', $_POST['uoccp']))
{
$len=strlen($_POST['uoccp']);

if($len>'25')
{$err3="Character limit exceeded";}
else
{
++$check;}
}
else
$err3="Only alphabetic characters are allowed ";


if(empty($_POST['upref']))
$err4="Field can't be left blank";


if(!empty($_POST['ugen'])&&!empty($_POST['upref'])&&$check==3)
{

setcookie('uage',$_POST['uage']);
setcookie('ugen',$_POST['ugen']);
setcookie('upet',$_POST['upet']);
setcookie('usmok',$_POST['usmok']);
setcookie('udrink',$_POST['udrink']);
setcookie('uhome',$_POST['uhome']);
setcookie('uoccp',$_POST['uoccp']);
setcookie('upref',$_POST['upref']);



header('location:details2.php');
}


}





?>