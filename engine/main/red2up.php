<?php
session_start();

$id=$_SESSION['userfi'];
$username=$_COOKIE['usrnme'];
$mail=$_COOKIE['email'];
$pas=$_SESSION['pass'];
$no=$_COOKIE['mno'];
$ty="N";
$date=date("M-d-Y,D");
$time=date("h:i:sa");

$oname=$_COOKIE['name'];
$oage=$_COOKIE['age'];
$ogen=$_COOKIE['gen'];

$mem="F";


$lid1=15010282;
$a=rand(200,258);
$b=rand(200,258);
$c=$a*$b;

$userid=$lid1*$c;

$_SESSION['userid']=$userid;


$host="localhost";
$user="demon96";
$pass="kritika96";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("winterland",$conn);
$sql1="insert into alpha_m values('$username','$id')";
$sql2="insert into alpha_m2 values('$id','$pas')";
$sql13="insert into alpha_m3 values('$username','$id','$userid','$date','$time')";
$sql3="delete from alpha_tmp where user_fi='$id'";

$sql4="insert into beta_per values('$userid','$oname','$oage','$ogen','$mail','$no','$ty','$date','$time')";
$sql5="insert into beta_mem values('$userid','$oname','$mem','$date','$time')";

$set1=mysql_query($sql1,$conn);
$set2=mysql_query($sql2,$conn);
$set3=mysql_query($sql3,$conn);
$set13=mysql_query($sql13,$conn);
$set4=mysql_query($sql4,$conn);
$set5=mysql_query($sql5,$conn);

if(isset($set1)&&isset($set2)&&isset($set3)&&isset($set13)&&isset($set4)&&isset($set5))
{

$_SESSION['find']=$id;
$_SESSION['find2']=$username;

setcookie('err',"Login to continue",time() +30);
header('location:signin.php');
}



?>