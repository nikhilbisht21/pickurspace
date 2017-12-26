<?php
session_start();


if($_POST['nxt3']=='Next')
{

setcookie('uhall',$_POST['hall']);
setcookie('ubed',$_POST['bed']);
setcookie('uwshr',$_POST['wshr']);
setcookie('ufurnshd',$_POST['furnshd']);
setcookie('ucbltv',$_POST['cbltv']);
setcookie('uinternet',$_POST['internet']);
setcookie('ufan',$_POST['fan']);
setcookie('uac',$_POST['ac']);
setcookie('ugeezer',$_POST['geezer']);
setcookie('ufridge',$_POST['fridge']);
setcookie('upark',$_POST['park']);
setcookie('usemi',$_POST['semi']);






$_SESSION['step']=33;
header('location:detail33.php');
}



?>