<?
session_start();

include('engine/main/letme.php');

$lid=15282;
$a=rand(200,258);
$b=rand(200,258);
$c=$a*$b;

$addid=$lid*$c;

$_SESSION['addid']=$addid;


include('engine/main/pickit_up.php');


if(isset($set1)&&isset($set2)&&isset($set3)&&isset($set13)&&isset($set4)&&isset($set5)&&isset($set6)&&isset($set7)&&isset($set8)&&isset($set9)&&isset($set10)&&isset($set11)&&isset($set12)&&isset($set14))
{
$_SESSION['step']=5;
header('location:upload.php');}
else
if(isset($set6)&&isset($set7)&&isset($set8)&&isset($set9)&&isset($set10)&&isset($set11)&&isset($set12)&&isset($set14))
{
$_SESSION['step']=5;
header('location:upload.php');
}



?>