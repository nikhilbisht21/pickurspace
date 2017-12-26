<?php
session_start();


if($_POST['nxt3']=='Next')
{

setcookie('hall',$_POST['hall']);
setcookie('bed',$_POST['bed']);
setcookie('wshr',$_POST['wshr']);
setcookie('furnshd',$_POST['furnshd']);
setcookie('cbltv',$_POST['cbltv']);
setcookie('internet',$_POST['internet']);
setcookie('fan',$_POST['fan']);
setcookie('ac',$_POST['ac']);
setcookie('geezer',$_POST['geezer']);
setcookie('fridge',$_POST['fridge']);
setcookie('park',$_POST['park']);
setcookie('semi',$_POST['semi']);






$_SESSION['step']=3;
header('location:detail3.php');
}



?>