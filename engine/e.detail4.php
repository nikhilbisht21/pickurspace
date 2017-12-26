<?
session_start();

$check=0;

if(!empty($_POST['nxt5']))
{

if(empty($_POST['dd'])||empty($_POST['yy'])||empty($_POST['mm']))
$err1="Field can't be left blank";

if(empty($_POST['maxt']))
$err2="Field can't be left blank";

if(empty($_POST['mint']))
$err4="Field can't be left blank";

if(empty($_POST['price']))
$err3="Field can't be left blank";
else
if(ereg('[^a-zA-Z]', $_POST['price']))
{

if($_POST['price']<500)
{$err3="Price not acceptable";
}
if($_POST['price']>1000000)
{$err3="Price limit exceeded";}
else
{
++$check;}
}
else
$err3="Only numeric characters are allowed";

if(!empty($_POST['maxt'])&&$check==1&&!empty($_POST['dd'])&&!empty($_POST['mm'])&&!empty($_POST['yy']))
{

setcookie('dd',$_POST['dd']);
setcookie('mm',$_POST['mm']);
setcookie('yy',$_POST['yy']);
setcookie('ptype',$_POST['proptype']);
setcookie('maxt',$_POST['maxt']);
setcookie('mint',$_POST['mint']);
setcookie('price',$_POST['price']);


header('location:details.php');
}

}

?>