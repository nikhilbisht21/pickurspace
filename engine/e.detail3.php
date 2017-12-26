<?php
session_start();

$check=0;

if(!empty($_POST['nxt4']))
{

if(empty($_POST['tgen']))
$err1="Field can't be left blank";
else
{

setcookie('t1name',$_POST['t1name']);
setcookie('t1age',$_POST['t1age']);
setcookie('t1gen',$_POST['t1gen']);
setcookie('t1state',$_POST['t1state']);
setcookie('t1cmp',$_POST['t1cmp']);

setcookie('t2name',$_POST['t2name']);
setcookie('t2age',$_POST['t2age']);
setcookie('t2gen',$_POST['t2gen']);
setcookie('t2state',$_POST['t2state']);
setcookie('t2cmp',$_POST['t2cmp']);

setcookie('t3name',$_POST['t3name']);
setcookie('t3age',$_POST['t3age']);
setcookie('t3gen',$_POST['t3gen']);
setcookie('t3state',$_POST['t3state']);
setcookie('t3cmp',$_POST['t3cmp']);

setcookie('t4name',$_POST['t4name']);
setcookie('t4age',$_POST['t4age']);
setcookie('t4gen',$_POST['t4gen']);
setcookie('t4state',$_POST['t4state']);
setcookie('t4cmp',$_POST['t4cmp']);

setcookie('tsmok',$_POST['tsmok']);
setcookie('tgen',$_POST['tgen']);
setcookie('tcoup',$_POST['tcoup']);
setcookie('tagemin',$_POST['tagemin']);
setcookie('tagemx',$_POST['tagemx']);
setcookie('tpref',$_POST['tpref']);

$_SESSION['step']=4;
header('location:detail4.php');
}
            }



?>