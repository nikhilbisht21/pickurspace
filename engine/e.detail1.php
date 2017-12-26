<?php
session_start();

$check=0;


if($_POST['nxt2']=='Next')
{

if($_POST['prop']!='Shop')
{
if(empty($_POST['room']))
$err2="Field can't be left blank";
}
else
{
if(empty($_POST['lngth'])||empty($_POST['brdth']))
$err2="Field can't be left blank";
}

if(empty($_POST['prop']))
$err1="Field can't be left blank";

if(empty($_POST['propadd']))
$err3="Field can't be left blank";

if(empty($_POST['propmrk']))
$err4="Field can't be left blank";

if(empty($_POST['proparea']))
$err5="Field can't be left blank";

if(empty($_POST['propdist']))
$err6="Field can't be left blank";
else
if(ereg('[a-zA-Z]', $_POST['propdist']))
{
$len=strlen($_POST['propdist']);

if($len>'25')
{$err6="Character limit exceeded";}
else
{
++$check;}
}
else
$err6="Only alphabetic characters are allowed ";

if(empty($_POST['propstate']))
$err7="Field can't be left blank";


if(!empty($_POST['room'])&&!empty($_POST['type'])&&!empty($_POST['propadd'])&&!empty($_POST['propmrk'])&&!empty($_POST['propstate'])&&!empty($_POST['propdist'])&&!empty($_POST['proparea']))
{



setcookie('lngth',$_POST['lngth']);
setcookie('brdth',$_POST['brdth']);

setcookie('room',$_POST['room']);
setcookie('kitch',$_POST['kitch']);
setcookie('p_bed',$_POST['bed']);

setcookie('type',$_POST['type']);
setcookie('ow_am',$_POST['oam']);
setcookie('p_add',$_POST['propadd']);
setcookie('pmrk',$_POST['propmrk']);
setcookie('parea',$_POST['proparea']);
setcookie('pdist',$_POST['propdist']);
setcookie('pstate',$_POST['propstate']);

$_SESSION['step']=2;
header('location:detail2.php');
}
           }


?>