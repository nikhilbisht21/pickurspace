<?php
session_start();

$id=$_SESSION['userfi'];


$host="localhost";
$user="demon96";
$pass="kritika96";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("winterland",$conn);
$sql="select verf from alpha_tmp where user_fi='$id'";
$set=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($set);


if($row['verf']!=$_POST['ver'])
{
$err1="Incorrect verification code";
}
else
{$access=1;

if($_SESSION['process']==1)
{
header('location:redirect.1.php');}
else
if($_SESSION['process']==2)
{$_SESSION['step']=5;
header('location:redirect.2.php');}
else
if($_SESSION['process']==3)
{
header('location:redirect.22.php');}
else
if($_SESSION['process']==4)
{
header('location:redirect.1.php');}


}

mysql_close($conn);
?>