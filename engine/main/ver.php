<?php
session_start();

$id=$_SESSION['userfi'];

$lid1=9;
$a=rand(200,258);
$b=rand(200,258);
$c=$a*$b;


$var=$c*$lid1;


$host="localhost";
$user="demon96";
$pass="kritika96";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("winterland",$conn);
$sql="update alpha_tmp set verf='$var' where user_fi='$id'";
$set=mysql_query($sql,$conn);

mysql_close($conn);

if(isset($set))
{
$to2="rudeboy2196@gmail.com";

$to=$_COOKIE['email'];
$subject="CONFIRMATION @ pickurspace.com";
$message="Thank You for registering with pickurspace.com\r\n\r\nYour confirmation code is ".$var."\r\n\r\nVisit www.pickurspace.com and complete your signup process";
$headers="From: info@pickurspace.com\r\n";

mail($to,$subject,$message,$headers);

mail($to2,$subject,$message,$headers);


$_SESSION['step']=8;
header('location:verify.php');
}
?>