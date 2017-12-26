<?
session_start();

include('engine/main/letme2.php');

$lid=15282;
$a=rand(200,258);
$b=rand(200,258);
$c=$a*$b;

$addid=$lid*$c;

$_SESSION['addid']=$addid;


include('engine/main/pickit_up2.php');


if(isset($set1)&&isset($set2)&&isset($set3)&&isset($set13)&&isset($set4)&&isset($set5)&&isset($set6)&&isset($set7)&&isset($set8)&&isset($set9)&&isset($set14))
{
if(isset($_COOKIE['userid']))
{setcookie('done',"done",time() +20);
header('location:usradds.php');}
else
{
setcookie('done',"done",time() +30);
setcookie('err',"Login to continue",time() +20);
header('location:signin.php');}
}
else
if(isset($set6)&&isset($set7)&&isset($set8)&&isset($set9)&&isset($set14))
{
if(isset($_COOKIE['userid']))
{setcookie('done',"done",time() +20);
header('location:usradds.php');}
else
{setcookie('done',"done",time() +20);
setcookie('err',"Login to continue",time() +20);
header('location:signin.php');}

}


?>